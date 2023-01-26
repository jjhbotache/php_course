<?php
  if (isset($_POST["enviando"])) {
    // print_r($_POST);

    $user=$_POST["nombre_usuario"];
    $age=$_POST["edad_usuario"];
    echo $user;
    
    if ($user=="Juanito") {
    echo "hola juanito :3 <br>";
    }else {
      echo "sacate la monda<br>";
    }

    if (($user=="Juanito")&&($age>=18)) {
      echo("Tas grande :') <br>");
    }
  }
 
  ?>