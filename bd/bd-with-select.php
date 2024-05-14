<?php
    $servername = "localhost";  // Nome do host
    $username = "root";  // Nome de usuário do MySQL
    $password = "";    // Senha do MySQL
    $dbname = "podcast";  // Nome do banco de dados
    
    // Criar conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar a conexão
    if (!$conn) {
      die("Conexão falhou: " . mysqli_connect_error());
    }

    // Verificar se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $mensagem = $_POST['mensagem'];

      // Inserir dados no banco de dados
      $sql = "INSERT INTO comentario (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
      if (mysqli_query($conn, $sql)) {
        echo '<div style="display: inline-block;
                    margin: 5px;
                    color: linear-gradient(
                      to right,
                      #25aae1,
                      #15f086,
                      #08b963,
                      #04753f
                    );
                    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
                    text-decoration: none;
                    padding: 3px 3px 3px;
                    font-size: 20px;
                    font-weight: 600;
                    text-align: center;
                    border: none;
                    -o-transition: all 0.4s ease-in-out;
                    -webkit-transition: all 0.4s ease-in-out;
                    transition: all 0.4s ease-in-out; ">' . 'Seu comentário foi postado com sucesso. Veja-o abaixo.' . '</div>';
      } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
      }
    }

    $sql = "SELECT nome, mensagem, data_envio FROM comentario";

    // Executar a consulta
    $result = $conn->query($sql);

    // Verificar se há registros retornados
    if ($result->num_rows > 0) {
      // Exibir os dados de cada linha
      while ($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
        $mensagem = $row["mensagem"];
        $data_envio = $row["data_envio"];

        // Aqui você pode fazer o que desejar com os dados recuperado
        echo '<div class="comentario">';
        echo '<p class="nome" id="nome-coment">' . $nome . '</p>';
        echo '<p class="mensagem" id="mensagem-coment">' . $mensagem . '</p>';
        echo '<p class="comentario-data" id="coment-data">' . $data_envio . '</p>';
        echo '</div>';
      }
    } else {
      echo "Nenhum resultado encontrado.";
    }

    // Fechar a conexão
    $conn->close();