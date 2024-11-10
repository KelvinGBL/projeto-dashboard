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
        <div class="sidebar close">
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
        </div>

        <main>
            <header>
                <div style="display: flex; align-items: center;">
                    <i class="sidebar-open bx bx-menu"></i>
                    <h1>Dashboard</h1>
                </div>
            </header>

        </main>

        <script>
            const sidebar = document.querySelector(".sidebar");
            const sidebarOpen = document.querySelector(".sidebar-open");

            sidebarOpen.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
        </script>

    </body>
</html>