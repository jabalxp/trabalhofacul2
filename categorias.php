<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Categorias</h2>
                    <p>Visualize e gerencie as categorias do sistema.</p>
                </div>
                <a href="cad-categorias.php" class="btn registro">Nova Categoria</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="text-align: center;">Nome</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td style="text-align: center;">Rafael Adriano Oliveira da Silva</td>
                            <td><span class="badge ativo">Ativo</span></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td style="text-align: center;">Ana Souza</td>
                            <td><span class="badge ativo">Ativo</span></td>
                        </tr>

                        </tr>

                        <tr>
                            <td>03</td>
                            <td style="text-align: center;">Miguel Casteletti Rosa</td>
                            <td><span class="badge inativo">Inativo</span></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td style="text-align: center;">Rafael Casteletti Rosa</td>
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