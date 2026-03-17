<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo("$nome");
echo "<br>";

if ($idade >= 18){
    echo("Você é um Adulto!");
} else {
    echo("Você é um Adolescente!");
}

?>