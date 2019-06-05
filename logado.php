<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Logado, parabéns!</title>
	<style type="text/css">
		#joia {
			width: 400px;
			height: 300px;
			margin: 100px;
		}
	</style>
</head>
<body>
	<div align="center">
		<img id="joia" src="assets/img/curtas0329-08.jpg" alt="curtas0329-08"/>
	</div>
	<script type="text/javascript">
		alert ("Olá! Seja bem-vindo!")
	</script>
</body>
</html>