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
    <link rel="stylesheet" type="text/css" href="css/sobre-nos.css" />
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/rodape.css">
  </head>
  <body>
    <header>
      <a href="index.php">
        <img src="img/ifrn-logo.png" alt="logo-ifrn" />
      </a>
      <h1>Extensão - Podcast Informatizando</h1>
    </header>

    <section class="hero">
      <h2>Bem-vindo a Extensão do Podcast Informatizando de Informática do IFRN!</h2>
        <img src="./img/informatizando.jpg" alt="Logo Podcast" />
      </a>

    </section>
    <section class="box">
      <h2>Quem somos?</h2>
        <p class="descricao">
            Somos uma equipe apaixonada por tecnologia e comunicação, unindo o conhecimento e a 
            criatividade para explorar os mais variados temas do mundo digital. Nosso podcast é 
            liderado pelo talentoso Professor André Freitas, um especialista em Rede de Computadores 
            que traz sua expertise para orientar e inspirar nossas discussões. Mas somos muito mais do 
            que apenas um podcast. Nosso site é o reflexo do trabalho árduo e colaborativo de nossos brilhantes 
            alunos, Lucas Gabriel e Luis Henrique, da turma INFO 4V 2021.1. Com suas habilidades técnicas e visão 
            inovadora, eles deram vida a este espaço digital, tornando-o um lugar acolhedor e inspirador para todos os amantes da tecnologia.
        </p>
    </section>

    <section class="box">
      <h2>Sobre o Professor André Freitas:</h2>
        <p class="descricao">
          O Professor André Freitas é um especialista em Rede de Computadores com 
          vasta experiência na área. Com seu conhecimento e paixão pela tecnologia,
           ele lidera nosso podcast, trazendo insights valiosos e orientação para nossas discussões.
        </p>
    </section>

    <section class="box">
      <h2>Sobre os Alunos:</h2>
        <p class="descricao">
          Lucas Gabriel e Luis Henrique, membros proeminentes da turma INFO 4V 2021.1 do IFRN, 
          foram os desenvolvedores do nosso site. Junto com vários outros alunos talentosos, 
          eles contribuíram para transformar nossa visão em realidade. Combinando suas habilidades técnicas 
          excepcionais e uma visão inovadora, eles são os pilares do desenvolvimento contínuo do nosso podcast 
          e site. Sua dedicação e paixão asseguram uma experiência envolvente e enriquecedora para todos os nossos ouvintes.
        </p>

        <div class="img-alunos">
          <div class="aluno">
        <img src="img/gabriel.jpg" alt="gabriel foto">
        <h2>Lucas Gabriel</h2>
        <a href="http://instagram.com/gabmndzz/" target="_blank">Instagram</a>
      </div>
      <div class="aluno">
        <img src="img/luis.jpg" alt="">
        <h2>Luis Henrique</h2>
        <a href="http://" target="_blank">Instagram</a>
      </div>
      </div>
    </section>

    <section class="box">
      <h2>Conteúdo do Podcast:</h2>
        <p class="descricao">        
          Descubra uma diversidade de tópicos envolventes em nosso podcast, 
          abordando desde as últimas tendências em tecnologia até dicas práticas
           para o dia a dia. Além disso, mergulhe em entrevistas exclusivas com 
           especialistas renomados, explorando suas visões e experiências. 
           Não perca a oportunidade de se manter atualizado e inspirado com 
           os episódios mais recentes. Junte-se a nós nessa emocionante jornada de conhecimento e descobertas!
        </p>
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
              <a href="index.php" title="Voltar para a página inicial">Voltar para a página inicial</a>
            </li>
            <li><a href="sobre-nos.php" title="Sobre nós">Sobre nós</a></li>
          </ul>
        </div>
        <!--Col Footer 1-->
        <div class="colfooter">
          <h3 class="titleFooter">Redes Sociais</h3>

          <a href="https://www.instagram.com/gabmndzz/" target="_blank" class="botao"
            ><span> <ion-icon name="logo-instagram"></ion-icon> </span
          ></a>
          <a href="https://www.linkedin.com/in/gabriel-mendes-bb5571264/"
          target="_blank" class="botao"
            ><span> <ion-icon name="logo-linkedin"></ion-icon> </span
          ></a>
          <a href="https://github.com/prodigycodermendes" target="_blank" class="botao"
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
          <a href="https://www.instagram.com/gabmndzz/" target="_blank" title="Gabriel Mendes"
            >Gabriel Mendes</a
          >
          e  <a href="#" target="_blank"  title="Gabriel Mendes"
          >Luis Henrique</a>
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
