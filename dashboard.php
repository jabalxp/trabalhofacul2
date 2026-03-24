<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2 faculdade</title>
    <link rel="stylesheet" href="dash.css">
</head>

<body>

    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
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
        </main>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>