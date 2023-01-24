<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <?php

  include("firstFunction.php");
  //este es un comentario
  print "hellow <br>";
  /* y este es uno de 
  bloque */
  print "hellow <br>";

  $name = "juanito";
  $age = 17;

  print "$name tiene $age  <br>";
  echo $name. " tiene ". $age. "<br>";

  firstFunction();

  function raiseVariable(){
    static $contador;
    $contador++;
    echo $contador . "<br>";
  }

  for ($i=0; $i < 4; $i++) { 
    raiseVariable();
  }

  $name2 = "JUANITO";
  if (strcmp($name, $name2)) {
    echo "son iguales <br>"; 
  } else {
    echo "no son iguales <br>"; 
  }
  
  $var1 = "10";
  $var2 = 10;

  if ($var1 ==  $var2 ) {
    echo "son iguales <br>";
  }else{
    echo "no lo son <br>";
  }
  ?>

  <script>
    window.onload= ()=>{
      setTimeout(function(){
        window.location.href = "trabajo_operadores.php";
      }, 3000); // 3000ms = 3 sec
    }
  </script>
</body>
</html>