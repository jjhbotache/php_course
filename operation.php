<?php
function operate ($operation){
  global $a;
  global $b;
  if (!strcmp("+",$operation)) {
    $result= $a + $b;
  } elseif (!strcmp("-",$operation)) {
    $result= $a - $b;
  } elseif (!strcmp("*",$operation)) {
    $result= $a * $b;
  } elseif (!strcmp("/",$operation)) {
    $result= $a / $b;
  }
  echo "<h2 style='color:red'>el resultado es $result </h2>";
}

?>