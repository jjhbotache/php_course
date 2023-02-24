<?php
$db_dir = "localhost";
$db_name = "pruebas";
$db_user = "root";
$db_psw = "";

$connection = mysqli_connect($db_dir,$db_user,$db_psw);
if (mysqli_connect_errno()) {
  echo ("Hubo un error");
  die();
}

mysqli_select_db($connection,$db_name) or die("no se pudo conectar a la bd") ;

$consulta = "SELECT * from articulos";
$resultados = mysqli_query($connection,$consulta); // genera un result set
// la proxima vez que se ejecute, esta buscara en la siguiente
while (($fila = mysqli_fetch_row($resultados))==true) { // si en fila hay algo ...
  for ($i=0; $i < count($fila); $i++) { 
    echo($fila[$i]);
    echo(" \t");
  }
  echo("<br>");
}
mysqli_close($connection)
?>
