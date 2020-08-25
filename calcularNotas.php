<?php 
include "head.php"; 
include "nav.php";
?>
<form action="dao/calculaMedia.php" method="POST">
  <div class="form-group">
    <label for="text">Nota 1:</label>
    <input type="number" class="form-control" placeholder="Nota 1" name="nota1">
  </div>
  <div class="form-group">
    <label for="text">Nota 2:</label>
    <input type="number" class="form-control" placeholder="Nota 2" name="nota2">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>