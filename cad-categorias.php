<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2 faculdade</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Categoria</h2>
                    <p>Preencha os dados abaixo para registrar uma nova categoria.</p>
                </div>
                <form action="insere-usuario.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Categoria:</label>
                        <input type="text" id="nome" name="nome" placeholder="Categoria" required>
                    </div>
                    <div class="form-group flex-1">
                        <label for="ano">Ano de Nascimento</label>
                        <select id="status" name="status">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn-save">Finalizar Cadastro<i class="fa-floppy-disk"></i></button>
        <a href="dashboard.php" class="btn-cancel">Cancelar</a>
    </div>
    </form>
    </section>
    </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>