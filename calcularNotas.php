<?php
session_start();
if (!isset($_SESSION["msg"])) {
  $_SESSION["msg"] = "";
} if (!isset($_SESSION["media"])) {
  $_SESSION["media"] = "";
}
include "head.php"; 
include "nav.php";
include_once "calcularNotas.php";
?>
<div class="container-fluid">
<form action="dao/calculaMedia.php" method="POST">
  <div class="form-group col-sm-2">
    <label for="text">Nota 1:</label>
    <input type="number" class="form-control" placeholder="Nota 1" name="nota1">
  </div>
  <div class="form-group col-sm-2">
    <label for="text">Nota 2:</label>
    <input type="number" class="form-control" placeholder="Nota 2" name="nota2">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php 
  echo $_SESSION["media"] . "<br>";
  echo  $_SESSION["msg"];
  session_destroy();
  ?>
  </div>