<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Postagens</h2>
                    <p>Visualize e gerencie as postagens do sistema.</p>
                </div>
            <a href="cad-postagens.php" class="btn registro">Nova Postagem</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Conteudo</th>
                            <th>Categoria</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Primeira Postagem</td>
                            <td>Primeira postagem.</td>
                            <td>Notícias</td>
                            <td><span class="badge ativo">Ativo</span></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Segunda Postagem</td>
                            <td>Segunda postagem.</td>
                            <td>Notícias</td>
                            <td><span class="badge ativo">Ativo</span></td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Terceira Postagem</td>
                            <td>Terceira postagem.</td>
                            <td>Notícias</td>
                            <td><span class="badge inativo">Inativo</span></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Quarta Postagem</td>
                            <td>Quarta postagem.</td>
                            <td>Notícias</td>
                            <td><span class="badge ativo">Ativo</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" align="right">Informação da quantidade de registros</td>
                        </tr>
                    </tfoot>
                </table>
        </main>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>