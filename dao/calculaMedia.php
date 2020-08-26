<?php
session_start();
include "../head.php"; 
include "../nav.php";
?>
<div class="container-fluid">
<?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    if (($nota1 < 0 or $nota1 > 10) or ($nota2 < 0 or $nota2 > 10)) {
        $_SESSION['msg'] = "Valor não permitido!<br>". $nota1 . " e " . $nota2 . " A nota deve conter valores de zero a dez.";
        header('Location: ../calcularNotas.php');
    exit;
    } elseif (empty($nota1)  or empty($nota2)) {
        $_SESSION['msg'] = "O(s) campo(s) está(ão) vazio(s), por favor preencha o(s) campo(s)!";
        header('Location: ../calcularNotas.php');
    exit;
    }

    $media = ($nota1 + $nota2)/2;
    $_SESSION["media"] = "Sua média é: " .$media;
    if ($media < 5) {
        $_SESSION["msg"] = "Você está Reprovado";
    } elseif ($media >= 5 and $media < 7) {
        $_SESSION["msg"] = "Você tem uma chance na VS";
    } else {
        $_SESSION["msg"] = "Você está Aprovado!";
    }
    header('Location: ../calcularNotas.php');
    exit;
?>
</div>