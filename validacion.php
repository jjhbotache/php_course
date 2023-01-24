<?php
  echo "hi";
  if (isset($_POST["enviando"])) {
    $user=$_POST["nombre_usuario"];
    $age=$_POST["edad_usuario"];
    echo $user;
    
    if ($user=="Juanito") {
    echo "hola juanito :3";
    }else {
      echo "sacate la monda";
    }
  }
 
  ?>