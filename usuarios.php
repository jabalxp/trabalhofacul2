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
                    <tbody id="lista-usuarios">
                        <!-- Usuarios renderizados pelo JavaScript -->
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            renderTable();
        });

        function renderTable() {
            const tbody = document.getElementById('lista-usuarios');
            const lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];
            
            tbody.innerHTML = '';

            if (lista.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Nenhum usuário encontrado.</td></tr>';
                return;
            }

            lista.forEach((user, index) => {
                const tr = document.createElement('tr');
                
                const isAtivo = (user.status === '1' || user.status === 'Ativo');
                const badgeClass = isAtivo ? 'badge ativo' : 'badge inativo';
                const statusText = isAtivo ? 'Ativo' : 'Inativo';
                const nivelTexto = user.nivel == "2" ? "Administrador" : "Usuário";
                
                tr.innerHTML = `
                    <td>${(index + 1).toString().padStart(2, '0')}</td>
                    <td>${user.nome}</td>
                    <td>${user.email}</td>
                    <td>${nivelTexto}</td>
                    <td><span class="${badgeClass}">${statusText}</span></td>
                    <td>
                        <a href="#" class="btn-icon" style="text-decoration:none; color:inherit; margin-right: 5px;"><i class="fa-solid fa-pen"></i></a>
                        <button class="btn-icon" onclick="deletarUsuario(${index})" style="cursor:pointer;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                `;
                tbody.appendChild(tr);
            });
        }

        window.deletarUsuario = function(index) {
            if (confirm('Tem certeza que deseja excluir este usuário?')) {
                let lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];
                lista.splice(index, 1);
                localStorage.setItem('bancoUsuarios', JSON.stringify(lista));
                renderTable();
            }
        };
    </script>
</body>
</html>