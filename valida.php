<?php
include ("conexao-formulario.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$usuario = $_POST['login'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT email, senha FROM usuarios WHERE email = '".$usuario."' AND senha = '".$senha."'";
	$result = $conn->query($sql); //mysqli_query($conn, $sql)
    ;

    if (mysqli_num_rows($result)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
        die();
    }else{  
        setcookie("login",$login);
        setcookie("email",$usuario);
        header("Location:logado.php");
    }
}


?>
