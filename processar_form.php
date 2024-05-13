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
echo '<div style="font-size: 22px; padding: 20px; ">' . 'Conexão bem sucedida' . '</div>';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Inserir dados no banco de dados
    $sql = "INSERT INTO comentario (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    if (mysqli_query($conn, $sql)) {
        echo '<div style="font-size: 22px; padding: 20px; ">' . 'Mensagem enviada com sucesso' . '</div>';
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }
}

class Comentario {
    private $id;
    private $nome;
    private $email;
    private $mensagem;
    private $data_envio;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function getDataEnvio() {
        return $this->data_envio;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
  // Não criamos um setter para o ID, pois ele é AUTO_INCREMENT e será gerado automaticamente no banco de dados
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
        echo "Nome: " . $nome . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
        echo "Data de Envio: " . $data_envio . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fechar a conexão
$conn->close();
?>