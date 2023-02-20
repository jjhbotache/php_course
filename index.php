<!DOCTYPE html>
<html lang="en">
<head>
  <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />
</head>
<body>

  

  
  <button onclick="leave()" class="my-2 btn btn-primary" type="button">leave</button></br>
  <button onclick="operationsExercise()" class="my-2 btn btn-primary" type="button">Go to the operations exercise</button></br>
  <form action="dbPhp.php" method="post">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


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



  // how to define a const
  define('MYNAME', 'Juanitojose');
  echo (MYNAME);
  echo ("Mi nombre es : ".MYNAME);
  // echo ("La ruta es : ".__DIR__);
  
  $rand_number = rand(1, 2);
  echo ("el numero random es $rand_number <br>");
  
  function increment (&$a){
    $a++;
  }
  $number = 5;
  echo(increment($number));// 6
  
  // esta es una clase Coche
  class Coche{
    // estos son los atributos
    public $ruedas;
    public $color;
    public $motor;
    
    function __construct(){
      $this->ruedas = 4;
      $this->color = "blanco";
      $this->motor = 1600;
      echo "me he creado <br>";
    }
    function arrancar(){
      echo "arranque <br>";
    }
    function frenar (){
      echo "frene <br>";
    }
  }
  
  // aqui se crea una instancia:
  $carro1 = new Coche();
  
  $carro1->arrancar();
  $carro1->frenar();
  
  class Camion extends Coche{
    function arrancar(){
      parent::arrancar();
      echo "arranque siendo un camion";
    }
  }

  $camion1 = new Camion();
  $camion1->arrancar();

  ?>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
         crossorigin="anonymous"
      ></script>
  <script>
    function leave(){
      window.location.href = "trabajo_operadores.php";
    }
    function operationsExercise(){
      window.location.href = "operationsExercise.php";
    }
  </script>
</body>
</html>