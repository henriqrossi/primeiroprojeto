<?php
include ("conexao-formulario.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$senha = md5($_POST["senha"]);
	//$rsenha = $_POST["rsenha"];

	// echo "Nome: $nome <br>";
	// echo "E-mail: $email <br>";
	// echo "Senha: $senha <br>";
	// echo "Repita: $rsenha <br>";
	// echo "Urgencia: $urgencia <br>";
	// echo "Mensagem: $mensagem <br>";

$sql = "insert into usuarios (nome, email, cpf, rg, cep, logradouro, numero, complemento, bairro, cidade, uf, senha) values ('".$nome."','".$email."','".$cpf."','".$rg."','".$cep."','".$rua."','".$numero."','".$complemento."','".$bairro."','".$cidade."','".$uf."','".$senha."')";
$conn->query($sql);

	//, now());

// Fecha a Conexão
 mysql_close($conexao);

	//$result_usuario = "INSERT INTO primeiro-form-teste (nome, email, senha, urgencia, mensagem, created) VALUES (".$nome.",".$email.",".$senha.",".$urgencia.",".$mensagem.",NOW())";
	//$resultado_usuario = mysqli_query($conn, $result_usuario);
header("Location: cadastrado.html");
exit;

?>

