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
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Rafael+Adriano&background=008080&color=fff" alt="Avatar">
                <span>Rafael Adriano</span>
            </div>
        </nav>

        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>
                <form action="processa.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Rafael Adriano" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for='senha'> Senha</label>
                            <input type="password" id='senha' name='senha' required>
                        </div>
                        <div class="form-group flex-1">
                            <label for='nivel'>Nivel</label>
                            <select id='nivel' name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-save">Finalizar Cadastro <i class="fa-solid fa-floppy-disk"></i></button>
                        <a href="index.php" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
        </main>

    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
    </footer>

</body>

</html>