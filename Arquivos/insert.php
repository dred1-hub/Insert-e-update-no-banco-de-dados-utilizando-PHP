<?php
/* Definindo as informações do banco de dados */
session_start();
define('HOST', 'localhost:3306');
define('USUARIO', 'root');
define('SENHA', 'luizaugusto');
define('DB', 'cadastro');

/* Código para conectar ao banco de dados */ 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

/* Recebendo as informações por POST do formulário de cadastro */
$nomeForm = trim($_POST['nomeForm']);
$dataNasForm = $_POST['dataNasForm'];
$telefoneForm = $_POST['telefoneForm'];
$emailForm = trim($_POST['emailForm']);
$senhaForm = trim(md5($_POST['senhaForm']));

/* Inserindo as informações no banco de dados */
$sql = "INSERT INTO clientes (`nome_cliente`, `email_cliente`, `telefone_cliente`, `senha_cliente`, `data_nasc_cliente`) VALUES ('$nomeForm', '$emailForm', '$telefoneForm', '$senhaForm', '$dataNasForm')";

/* Verificando se as informações foram cadastradas no banco de dados para notificar pro usuário que tudo foi cadastrado */
if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

/* Encerrando a conecção com o banco de dados */
$conexao->close();

/* Direcionando a pagina de volta ao formulário */
header('location: formulario.php');
exit;
?>
