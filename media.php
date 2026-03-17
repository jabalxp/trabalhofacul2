<?php

$nota = $_GET['nota'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];


$media = ($nota + $nota2 + $nota3 + $nota4) / 4;
echo ("Sua média é: " . $media . "<br>");

if ($media >= 6){
    echo ("Parabéns, você está aprovado");
} else {
    echo ("Que pena, reprovado!");
}

?>