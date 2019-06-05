<?php
include ("conexao-formulario.php");

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';

	$sql = "SELECT email, senha FROM usuarios WHERE email = '".$usuario."' AND senha = '".$senha."'";
	$query = $conn->query($sql);
	$resultado = mysql_fetch_array($query);
                $usuario = $resultado['email'];
                
                if (mysql_num_rows($query)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{  
                    setcookie("login",$login);
                    setcookie("email",$usuario);
                    header("Location:main.php");
                }
        }

		
?>
