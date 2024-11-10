<?php 
    // if(isset($_POST['submit'])){
    //     include_once("config.php");

    //     $modelo = $_POST['input-modelo'];
    //     $patrimonio = $_POST['input-patrimonio'];
    //     $n_serie = $_POST['input-n-serie'];
    //     $sala = $_POST['input-sala'];

    //     $result = mysqli_query($conn, "INSERT INTO chromebooks(modelo, patrimonio, n_serie, sala)
    //     VALUES ('$modelo', '$patrimonio', '$n_serie', '$sala')");
    // }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar1</title>


        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Style CSS -->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <i class='logo-icon bx bxl-chrome'></i>
                <span class="logo-name">Logo</span>
            </header>

            <ul class="nav-links">

                <li>
                    <a href="index.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="usuarios.php">
                        <i class='bx bxs-group'></i>
                        <span class="link-name">Usuários</span>
                    </a>
                </li>
                
            </ul>
        </nav>

        <main>
            <header>
                <div style="display: flex; align-items: center;">
                    <i class="sidebar-open bx bx-menu"></i>
                    <h1>Usuários</h1>
                </div>

                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem">
                    <button id="open-modal-cadastrar" style=" display: flex; align-items: center; justify-content: center; gap:0.8rem; font-size: 1rem; color: white; border: none; background: #122D32; cursor: pointer; padding: 6px 16px; border-radius: 8px;">
                        Cadastrar
                        <i class='bx bxs-user-plus' style="font-size: 1.4rem;"></i>
                    </button>

                    <button style=" display: flex; align-items: center; justify-content: center; gap:0.8rem; font-size: 1rem; color: white; border: none; background: #122D32; cursor: pointer; padding: 6px 16px; border-radius: 8px;">
                        Export CSV
                        <i class='bx bxs-file-export' style="font-size: 1.2rem;"></i>
                    </button>
                </div>
            </header>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody id="table-users">
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>alfred@gmail.com</td>
                            <td>10/11/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="pagination" style="display: flex; align-items: center; gap: 1rem; font-size: 1rem; padding-left: 20px;">
                <button onclick="prevPage()" style="border: none; background: none; color: white;">Anterior</button>
                <span id="page-numbers" style="display: flex; align-items: center; gap: 10px;"></span>
                <button onclick="nextPage()" style="border: none; background: none; color: white;">Próximo</button>
            </div>
        </main>

        <script>
            const rowsPerPage = 2;
            let currentPage = 1;
            const tableBody = document.getElementById('table-users');
            const rows = tableBody.getElementsByTagName('tr');
            const totalPages = Math.ceil(rows.length / rowsPerPage);
            const maxPageNumbers = 5; // máximo de números de página a exibir

            function displayPage(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                for (let i = 0; i < rows.length; i++) {
                    rows[i].style.display = (i >= start && i < end) ? '' : 'none';
                }

                updatePageNumbers();
            }

    function updatePageNumbers() {
        const pageNumbers = document.getElementById('page-numbers');
        pageNumbers.innerHTML = '';

        // Determina o intervalo de números de página a serem exibidos
        let startPage = Math.max(1, currentPage - Math.floor(maxPageNumbers / 2));
        let endPage = Math.min(totalPages, startPage + maxPageNumbers - 1);

        if (endPage - startPage < maxPageNumbers - 1) {
            startPage = Math.max(1, endPage - maxPageNumbers + 1);
        }

        // Gera os números de página dinâmicos
        for (let i = startPage; i <= endPage; i++) {
            const pageButton = document.createElement('button');
            pageButton.style.background = "none";
            pageButton.style.color = "white";
            pageButton.style.padding = '10px 14px';
            pageButton.style.border = 'none';
            pageButton.style.borderRadius = '8px';
            pageButton.style.cursor = 'pointer';

            pageButton.innerText = i;
            pageButton.onclick = () => goToPage(i);

            if (i === currentPage) {
                pageButton.style.fontWeight = 'bold'; // Destaque para a página atual
                pageButton.style.background = '#122D32';
            }

            pageNumbers.appendChild(pageButton);
        }
    }

    function goToPage(page) {
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            displayPage(currentPage);
        }
    }

    function prevPage() {
        if (currentPage > 1) {
            currentPage--;
            displayPage(currentPage);
        }
    }

    function nextPage() {
        if (currentPage < totalPages) {
            currentPage++;
            displayPage(currentPage);
        }
    }

    // Inicializa a primeira página
    displayPage(currentPage);
</script>


        <style>
            .input-field {
                position: relative;
            }

            input {
                border: none;
                border-bottom: 2px solid #ccc;
                padding: 10px;
                padding-left: 0px;
                padding-bottom: 6px;
                color: #8a8a8a;
                width: 100%;
                font-size: 1rem;
                transition: border-color 0.2s;
                outline: none; /* Remove o contorno padrão */
            }

            input:focus {
                border-color: #8a8a8a; /* Cor ao focar */
            }

            label {
                position: absolute;
                left: 0px;
                top: 10px;
                font-size: 16px;
                color: #aaa;
                pointer-events: none;
                transition: 0.2s;
                background: white;
            }

            input:focus + label,
            input:not(:placeholder-shown) + label {
                top: -10px;
                left: 0px;
                font-size: 12px;
                color: #8a8a8a; /* Cor do label flutuante */
                font-weight: bold;
            }

            /* Cor da borda quando o input tem valor */
            input:not(:placeholder-shown) {
                border-color: #8a8a8a; /* Cor quando houver conteúdo */
            }

            /* Modal */
            .modal-sidebar {
                display: none;
                position: fixed;
                z-index: 999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100vh;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.5);
                opacity: 0;
                transition: opacity 0.5s ease;
                align-items: center;
            }
            .modal-sidebar.show {
                display: block;
                opacity: 1;
            }
            .modal-sidebar-content {
                background-color: white;
                margin: 0 auto;
                margin-top: 8vh;
                margin-bottom: 8vh;
                padding: 25px 30px;
                border: 1px solid #888;
                width: 80%;
                max-width: 450px;
                border-radius: 10px;
                transform: translateY(-50px);
                transition: transform 0.5s ease, opacity 0.5s ease;
                opacity: 0;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .modal-sidebar-header{
                position: relative;
                display: flex;
                justify-content: space-between;
                margin-bottom: 1rem;
                color: gray;
            }

            .modal-sidebar.show .modal-sidebar-content {
                transform: translateY(0);
                opacity: 1;
            }

            .modal-sidebar-close {
                color: white;
                align-self: flex-end;
                cursor: pointer;
                position: absolute;
                top: -25px;
                right: -30px;
                height: 45px;
                width: 45px;
                background: gray;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                border-bottom-left-radius: 8px;
                transition: 0.4s;
                align-self: flex-end;
                font-size: 30px;
                font-weight: bold;
                cursor: pointer;
            }
            .modal-sidebar-close:hover,
            .modal-sidebar-close:focus {
                background: #555;
                color: white;
                text-decoration: none;
                cursor: pointer;
                transition: 0.4s;
            }
            
            /* Grupo de formulários */
            form{
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }
            .form-box {
                margin-bottom: 15px;
            }
            .form-box label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 1rem;
                color: #302D2D;
            }
            .form-box input,
            .form-box select {
                width: 100%;
                padding: 8px 15px;
                font-size: 1rem;
                box-sizing: border-box;
                border-radius: 5px;
                border: 1px solid #ccc;
                background: #F2F2F2;
            }

            .form-box input:focus,
            .form-box select:focus {
                outline: 2px solid #302D2D;
            }

            .modal-input-submit{
                display: block;
                border: none;
                color: white;
                background: gray;
                cursor: pointer;
                font-weight: bold;
                font-size: 1.1rem;
                text-align: center;
                padding: 10px 15px;
                border: none;
                width: 100%;
                border-radius: 5px;
                transition: 0.4s;
            }

            .modal-input-submit:hover{
                background: #555;
            }
        </style>
        <!-- Modal Cadastrar Usuário -->
        <div id="modal-cadastrar" class="modal-sidebar">
            <div class="modal-sidebar-content" style="overflow: hidden;">
            
                <div class="modal-sidebar-header">
                    <h2>Cadastrar Usuário</h2>
                    <span id="modal-close-cadastrar" class="modal-sidebar-close">&times;</span>
                </div>

                <form id="form-cadastrar" action="" method="post" autocomplete="off">

                    <div class="input-field">
                        <input id="name" type="text" autocomplete="off" required placeholder=" ">
                        <label for="name">Nome:</label>
                    </div>
                    <div class="input-field">
                        <input id="name" type="text" autocomplete="off" required placeholder=" ">
                        <label for="name">Email:</label>
                    </div>
                    
                    <input class="modal-input-submit" style="margin-top: 2rem; border-radius: 5px;" type="submit" name="submit" value="Cadastrar">
                </form>
            </div>
        </div>

        <script>
            // Classe Modal em JavaScript (POO)
            class Modal_Cadastrar_Usuario {
                constructor(config, cssDisplay) {
                    // Atributos do modal
                    this.modal = document.getElementById(config.modalId);       // Elemento do modal
                    this.openBtn = document.getElementById(config.openBtnId);   // Botão para abrir o modal
                    this.closeBtn = document.getElementById(config.closeBtnId); // Botão para fechar o modal
                    this.form = document.getElementById(config.formId);         // Formulário dentro do modal

                    this.initEvents(cssDisplay);
                }

                // Método para inicializar os eventos
                initEvents(cssDisplay) {
                    // Evento de clique para abrir o modal
                    this.openBtn.addEventListener('click', () => this.open(cssDisplay));

                    // Evento de clique para fechar o modal ao clicar no botão "close"
                    this.closeBtn.addEventListener('click', () => this.close());

                    // Evento de clique para fechar o modal ao clicar fora do conteúdo do modal
                    window.addEventListener('click', (event) => {
                        if (event.target === this.modal) {
                            this.close();
                        }
                    });

                    // Evento de submit para validar o formulário
                    this.form.addEventListener('submit', (event) => this.validarForm(event));
                }

                // Método para abrir o modal
                open(cssDisplay) {
                    this.modal.style.display = cssDisplay; // Exibe o modal antes de iniciar a animação
                    setTimeout(() => {
                        this.modal.classList.add('show');
                    }, 10); // Atraso pequeno para garantir que o CSS transite corretamente
                }

                // Método para fechar o modal
                close() {
                    this.modal.classList.remove('show');
                    setTimeout(() => {
                        this.modal.style.display = 'none';
                    }, 500); // Duração da animação de desaparecimento
                }

                // Método para validar o formulário
                validarForm(event) {
                    const senha = document.getElementById('input-cadastrar-senha');
                    const confirmarSenha = document.getElementById('input-cadastrar-confirmar-senha');

                    if (senha.value !== confirmarSenha.value) {
                        event.preventDefault();  // Evita o envio do formulário
                        alert('As senhas não correspondem. Tente novamente.');
                        confirmarSenha.focus();
                    }
                }
            }

            // Objeto de configuração
            const modalConfig = {
                modalId: 'modal-cadastrar',
                openBtnId: 'open-modal-cadastrar',
                closeBtnId: 'modal-close-cadastrar',
                formId: 'form-cadastrar'
            };

            // Instância da classe Modal
            const modalCadastrarUsuario = new Modal_Cadastrar_Usuario(modalConfig, 'flex');

        </script>

        <script>
            const sidebar = document.querySelector(".sidebar");
            const sidebarOpen = document.querySelector(".sidebar-open");

            sidebarOpen.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
        </script>

    </body>
</html>