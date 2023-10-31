<?php 

#incluindo conexao:
require_once("src/databases/conexao.php");
@session_start();
#condição que verifica se o campo username ou o campo pass estão vazios:
if(empty($_POST['email']) || empty($_POST['senha'])){
    #usando javascript para redirecionar para a mesma página,
    #poderia usar o header, porém em alguns provedores como a hostgator, para funcionar precisa fazer alguns tratamentos;
		echo "<script language='javascript'>window.location='login.php'; </script>";
}

$usuario = $_POST['email'];
$senha = md5($_POST['senha']);
#abrindo a conexão com o banco de dados e guarda na variável $dbh :
$dbh = Conexao::getConexao();

$res = $dbh->prepare("SELECT * from usuarios where email = :email and senha = :senha ");

$res->bindParam(":email", $usuario);
$res->bindParam(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);



if($linhas > 0){
	$_SESSION['nome_usuario'] = $dados[0]['nome'];
	$_SESSION['email_email'] = $dados[0]['email'];
	$_SESSION['nivel_usuario'] = $dados[0]['nivel'];
    $_SESSION['cpf_usuario'] = $dados[0]['cpf'];



	if($_SESSION['nivel_usuario'] == 'admin'){
		echo "<script language='javascript'>window.location='index.php'; </script>";
		exit();
	}

	if($_SESSION['nivel_usuario'] == 'cliente'){
		echo "<script language='javascript'>window.alert('Login realizado com sucesso!'); </script>";
		echo "<script language='javascript'>window.location='index.php'; </script>";
		exit();
	}

}else{
	echo "<script language='javascript'>window.alert('Email ou senha inválidos!'); </script>";
	echo "<script language='javascript'>window.location='login.php'; </script>";
	
}
$dbh = null;
 ?>
 <!--  -->