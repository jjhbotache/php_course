<?php
if (isset($_POST["enviando"])) {
  $age = $_POST["edad_usuario"];
  if ($age <= 18) {
    echo "Eres menor de edad";
  } else if ($age <= 40) {
    echo "Eres joven";
  } else if ($age <= 65) {
    echo "eres maduro";
  } else {
    echo "cuidate";
  }
}
  ?>