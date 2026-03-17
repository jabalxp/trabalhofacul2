<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
</head>
<body>
    <style>
        .ativo{
            background: green;
            color: white;
        }

        .badge{
            padding: 5px 7px;
            border-radius: 5px; 
        }

        .inativo{
            background:rgb(124, 14, 14);
            color: white;
        }
    </style>

    <?php
        $nivelAcesso = 1;
        if ($nivelAcesso == 2){
            echo '<span class="badge ativo">Administrador</span>';
        } else{
            echo '<span class="badge inativo">Usuário Comum</span>';
        };
        ?>
</body>
</html>