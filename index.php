<?php
$largura = 15;
$comprimento = 30;
$area = $largura * $comprimento;


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2 faculdade</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        .ativo {
            background-color: #28a745;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }

        .inativo {
            background-color: #dc3545;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="container-cards">
                <article>
                    <h2>Módulo de Usuário</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Relatórios de Vendas</h2>
                    <p>Acompanhe os gráficos de desempenho deste mês.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Configurações do Servidor</h2>
                    <p>Ajuste as portas do Apache e banco de dados.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
            </section>

            <section class="container-cards" style="margin-top: 20px;">
                <article>
                    <h2>Calculadora de Área</h2>
                    <p>
                        <?php
                        echo "Largura: $largura m <br>";
                        echo "Comprimento: $comprimento m <br><br>";
                        echo "<strong>A área do terreno é " . $area . " m²</strong>";
                        ?>
                    </p>
                </article>
                <article>
                    <h2>Status do Usuário</h2>
                    <p>
                        <?php
                        $nivelAcesso = 2;

                        if ($nivelAcesso == 2) {
                            echo '<span class="badge ativo">Administrador</span>';
                        } else {
                            echo '<span class="badge inativo">Usuário Comum</span>';
                        }
                        ?>
                    </p>
                </article>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
