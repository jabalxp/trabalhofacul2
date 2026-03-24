<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'components/menu.php'; ?>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Usuários</h2>
                    <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
                </div>
                <a href="cad-usuarios.php" class="btn registro">Novo Usuário</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Rafael Adriano Oliveira da Silva</td>
                            <td>rafael.adriano2801@gmail.com</td>
                            <td>Administrador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa fa-trash" aria-hidden="true"></i>
                                    <button class="btn-icon"><i class="fa fa-eye" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ana Souza</td>
                            <td>ana.souza@email.com</td>
                            <td>Editor</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa fa-trash" aria-hidden="true"></i>
                                    <button class="btn-icon"><i class="fa fa-eye" aria-hidden="true"></i>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Miguel Casteletti Rosa</td>
                            <td>miguelcastelettirosa@gmail.com</td>
                            <td>Editor</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa fa-trash" aria-hidden="true"></i>
                                    <button class="btn-icon"><i class="fa fa-eye" aria-hidden="true"></i>
                            </td>
                        </tr>
                         <tr>
                        <td>04</td>
                        <td>Rafael Casteletti Rosa</td>
                        <td>rafaelcastelettirosa@gmail.com</td>
                        <td>Editor</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td>
                            <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon"><i class="fa fa-trash" aria-hidden="true"></i>
                            <button class="btn-icon"><i class="fa fa-eye" aria-hidden="true"></i>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">Informação de quantidade de registros...</td>
                        </tr>
                    </tfoot>
                </table>
        </main>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>