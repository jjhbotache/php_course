<?php
if (isset($_POST)) {
  $a = intval($_POST["a"]);
  $b = intval($_POST["b"]);
  if (!strcmp("+",$_POST["operation"])) {
    echo $a + $b;
  } elseif (!strcmp("-",$_POST["operation"])) {
    echo $a - $b;
  } elseif (!strcmp("*",$_POST["operation"])) {
    echo $a * $b;
  } elseif (!strcmp("/",$_POST["operation"])) {
    echo $a / $b;
  }
}
?>