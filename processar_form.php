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
echo "Conexão bem-sucedida";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Inserir dados no banco de dados
    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }
}