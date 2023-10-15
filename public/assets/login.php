<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "usuarios";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexiÃ³n: ".mysqli_connect_error());
}

$nombre = $_POST["mail-outline"];
$pass = $_POST["lock-closed-outline"];

$query = mysqli_query($conn,"SELECT * FROM entrada WHERE usuario = '".$nombre."' and contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{

	include ("index.html");
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Â¡Escribe bien tu usuario y contraseÃ±a, no seas tonto!');window.location= 'index.html' </script>";
}
	


?>