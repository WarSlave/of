
<!--Estabelecando conexao com servidor da minha casa-->

	<!-- Programa para trabalhar em uma oficina -->
	<!-- Criado por Alyson Antonio DATA 27/02/18 as 21:40 -->

<?php
	$host = "localhost";
	$user = "dboficina";
	$pass = "oficina";
	$banco = "dboficina";

	$conn = mysqli_connect($host, $user, $pass, $banco);
?>