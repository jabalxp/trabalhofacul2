<?php
// Dados de acesso "Chumbados"
$userMaster = "rafael.adriano2801@gmail.com";
$passMaster = "esqueciasenha";
// Recebendo via POST
$email = $_POST['email'];
$senha = $_POST['senha'];
if ($email == $userMaster && $senha == $passMaster) {
    // Sucesso: Vai para o Dashboard
    header("Location: dashboard.php");
} else {
    // Erro: Volta para o Login com um sinalizador
    header("Location: index.php?erro=1");
}
exit();
