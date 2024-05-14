<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap" rel="stylesheet" />
  <title>Podcast Informatizando</title>
  <link rel="stylesheet" type="text/css" href="css/sobre-nos.css" />
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/rodape.css">
</head>

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
    inovadora, eles deram vida a este espaço digital, tornando-o um lugar acolhedor e inspirador para todos os amantes
    da tecnologia.
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
      <img class="img-sobre-nos" src="img/gabriel.jpg" alt="gabriel foto">
      <h2>Lucas Gabriel</h2>
      <a href="http://instagram.com/gabmndzz/" target="_blank">Instagram</a>
    </div>
    <div class="aluno">
      <img class="img-sobre-nos" src="img/luis.jpg" alt="">
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
  <?php
  require_once "form/form.php";
  ?>
</section>

<?php
  require_once "bd/bd.php";
?>

<footer>
  <?php
  require_once "footer/footer.php";
  ?>
</footer>

</body>

</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<script src="js/script.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</html>