<?php
$db_dir = "localhost";
$db_name = "pruebas";
$db_user = "root";
$db_psw = "";

$connection = mysqli_connect($db_dir,$db_user,$db_psw,$db_name);
$consulta = "SELECT * from datos";
$resultados = mysqli_query($connection,$consulta);
$fila = mysqli_fetch_row($resultados);
echo($fila[0]."<br>");
echo($fila[1]."<br>");
echo($fila[2]."<br>");
?>
