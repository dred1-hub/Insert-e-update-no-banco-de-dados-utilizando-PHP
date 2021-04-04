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
$idUsuario = trim($_POST['idUsuario']);

/* Alterando as informações no banco de dados utilizando o ID informado */
$sql = "UPDATE `clientes` SET `nome_cliente` = '$nomeForm', `email_cliente` = '$emailForm', `telefone_cliente` = '$telefoneForm', `senha_cliente` = '$senhaForm', `data_nasc_cliente` = '$dataNasForm' WHERE (`id_cliente` = '$idUsuario')";

/* Verificando se as informações foram alteradas no banco de dados para notificar pro usuário que tudo foi alterado */
if($conexao->query($sql) === TRUE){
    $_SESSION['status_update'] = true;
}

/* Encerrando a conecção com o banco de dados */
$conexao->close();

/* Direcionando a pagina de volta ao formulário */
header('location: alterarCad.php');
exit;
?>
