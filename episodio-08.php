<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <title>Podcast Informatizando</title>
    <link rel="stylesheet" type="text/css" href="css/style-episodes.css" />
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/rodape.css">
  </head>
  <body>
    <header>
      <a href="index.php">
        <img src="img/ifrn-logo.png" alt="logo-ifrn" />
      </a>
      <h1>Podcast Informatizando</h1>
    </header>

    <section class="hero">
      <h2>O uso excessivo das redes sociais e manipulação do algoritmo</h2>
      <a
        href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1"
        target="_blank"
      >
        <img src="./img/informatizando.jpg" alt="Imagem Podcast" />
      </a>
      <a
        href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1"
        target="_blank"
        class="button"
        >Ouvir Agora</a
      >
      <div class="introducao-episodio">
        <p>
          É sabido por muitas pessoas que o uso excessivo das redes sociais é
          motivo de preocupação. No entanto, esse conhecimento não parece deter
          o crescimento contínuo da sua utilização. Um estudo conduzido pela
          entidade pública de saúde do Reino Unido revelou que o uso excessivo
          das mídias sociais está associado a uma série de problemas, incluindo
          ansiedade, depressão, solidão, distúrbios do sono, baixa autoestima e
          dificuldades de relacionamento offline. Além disso, o uso das redes
          sociais frequentemente leva os usuários a criar uma realidade
          ficcional, uma distorção da realidade com a qual não estão
          satisfeitos. Diante disso, surge a pergunta: como esse uso excessivo
          se tornou ainda mais problemático? Para responder a essa questão, é
          fundamental compreender a constante evolução das redes sociais, agora
          impulsionada pela Inteligência Artificial (IA).
        </p>
      </div>
    </section>

    <section class="hero">
      <h2>
        Mas o que a manipulação do algoritmo faz para que os usuários fiquem
        “presos” as redes?
      </h2>
      <img src="img/interrogacao.jpg" alt="logo-pergunta" />
      <div class="introducao-episodio">
        <p>
          A manipulação do algoritmo nas redes sociais desempenha um papel
          crucial na retenção dos usuários dentro da plataforma. Os algoritmos
          são conjuntos de códigos que identificam padrões e determinam quais
          conteúdos serão exibidos aos usuários, além de definir sua frequência
          e relevância. Esses algoritmos também operam com um código de
          prioridade, muitas vezes projetado para apresentar e promover produtos
          ou ideias específicas. Para alcançar esse objetivo, os algoritmos
          analisam ativamente a vida virtual dos usuários em busca de
          informações sobre suas preferências, fragilidades e comportamentos.
          Isso nos leva a refletir sobre a veracidade da afirmação do jornalista
          Andy Lewis: "Se você não paga pelo produto, o produto é você". Nas
          redes sociais, onde muitas vezes somos o produto, essa dinâmica
          torna-se ainda mais evidente, pois as plataformas são frequentemente
          utilizadas como veículos para a venda de produtos ou ideias.
        </p>
      </div>
    </section>

    <section class="hero">
      <h2>Resumo do Episódio</h2>
      <img src="img/resumo-episodio.png" alt="resumo-episodio" />
      <div class="introducao-episodio">
        <p>
          No episódio 08, discute-se a importância dos cuidados ao utilizar as
          redes sociais de forma excessiva, considerando seu impacto em várias
          áreas da vida das pessoas, como a acadêmica, profissional e
          socioeconômica. A manipulação do algoritmo pode levar à
          procrastinação, o ato de postergar responsabilidades, e isso pode ser
          explicado pela maneira como os algoritmos das redes sociais operam.
          Esses algoritmos têm o poder de persuadir e viciar os usuários,
          mostrando conteúdos que despertam seu interesse e prendendo sua
          atenção através da liberação de dopamina, um hormônio associado ao
          prazer. Para evitar esse ciclo vicioso, é recomendado reduzir o uso
          das redes sociais para atividades essenciais e buscar outras formas de
          entretenimento, como a prática de exercícios físicos. É crucial fazer
          escolhas que otimizem o tempo e evitem ficar preso nesse ciclo de
          dopamina barata, que pode causar danos à saúde mental no futuro. Além
          disso, a exposição constante às informações nas redes sociais aumenta
          o risco de as pessoas serem expostas a notícias falsas, conhecidas
          como Fake News, e repassá-las sem verificar sua veracidade. Isso
          ocorre porque os algoritmos das redes sociais tendem a priorizar
          informações que despertam o interesse do usuário, mesmo que não sejam
          verdadeiras.
        </p>
      </div>
    </section>

    <section class="form">
      <h2>Envie um comentário</h2>

      <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <div class="input-form"><input type="submit" value="Enviar" /></div>
      </form>
    </section>

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
                    transition: all 0.4s ease-in-out; ">' . 'Seu comentário foi postado com sucesso. Veja-o na pagina inicial.' . '</div>';
                } else {
                    echo "Erro ao inserir dados: " . mysqli_error($conn);
                }
            }

            class Comentario
            {
                private $id;
                private $nome;
                private $email;
                private $mensagem;
                private $data_envio;

                // Getters
                public function getId()
                {
                    return $this->id;
                }

                public function getNome()
                {
                    return $this->nome;
                }

                public function getEmail()
                {
                    return $this->email;
                }

                public function getMensagem()
                {
                    return $this->mensagem;
                }

                public function getDataEnvio()
                {
                    return $this->data_envio;
                }

                // Setters
                public function setNome($nome)
                {
                    $this->nome = $nome;
                }

                public function setEmail($email)
                {
                    $this->email = $email;
                }

                public function setMensagem($mensagem)
                {
                    $this->mensagem = $mensagem;
                }
                // Não criamos um setter para o ID, pois ele é AUTO_INCREMENT e será gerado automaticamente no banco de dados
            }
            ?>

    <footer class="main_footer container">
      <div class="content">
        <div class="colfooter">
          <h3 class="titleFooter">Menu</h3>

          <ul>
            <li>
              <a href="index.php" title="Voltar para a página inicial"
                >Voltar para a página inicial</a
              >
            </li>
            <li><a href="sobre-nos.php" title="Sobre nós">Sobre nós</a></li>
          </ul>
        </div>
        <!--Col Footer 1-->
        <div class="colfooter">
          <h3 class="titleFooter">Redes Sociais</h3>

          <a
            href="https://www.instagram.com/gabmndzz/"
            target="_blank"
            class="botao"
            ><span> <ion-icon name="logo-instagram"></ion-icon> </span
          ></a>
          <a
            href="https://www.linkedin.com/in/gabriel-mendes-bb5571264/"
            target="_blank"
            class="botao"
            ><span> <ion-icon name="logo-linkedin"></ion-icon> </span
          ></a>
          <a
            href="https://github.com/prodigycodermendes"
            target="_blank"
            class="botao"
            ><span> <ion-icon name="logo-github"></ion-icon> </span
          ></a>
        </div>
        <!--Col Footer 2-->
        <div class="clear"></div>
      </div>
      <!--Contant-->
      <div class="main_footer_copy">
        <p class="m-b-footer">
          &copy; 2023 Podcast Informatizando. Todos os direitos reservados.
        </p>
        <p class="by">
          <ion-icon name="people"></ion-icon> Desenvolvido por:
          <a
            href="https://www.instagram.com/gabmndzz/"
            target="_blank"
            title="Gabriel Mendes"
            >Gabriel Mendes</a
          >
          e
          <a
            href="#"
            target="_blank"
            title="Gabriel Mendes"
            >Luis Henrique</a
          >
        </p>
      </div>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
  <script src="script.js"></script>
</html>
