<?php
include "../head.php"; 
include "../nav.php";
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    
    echo "A média é: ". ($nota1 + $nota2)/2;
?>
