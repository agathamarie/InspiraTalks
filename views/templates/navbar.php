<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspira Talks</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="icon" href="../css/images/logoSite.png" type="image/png">
</head>
<body>
    <nav id="navBar">
        <div id="divMenu">
            <i id="buttonMenu" class='bx bx-menu'></i>
        </div>
        <ul id="ul-nav">
            <div class="div-ul">
                <p class="textMenu">Menu</p>
                <li class="item-menu">
                    <a href="../admin/dashboard.php" class="nav-item">
                        <i class='bx bxs-dashboard iconItem'></i> <span class="textMenu">DASHBOARD</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../admin/dashboardEventos.php" class="nav-item">
                        <i class='bx bxs-calendar-event iconItem'></i> <span class="textMenu">EVENTOS</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../admin/dashboardPalestras.php" class="nav-item">
                        <i class='bx bxs-chat iconItem'></i> <span class="textMenu">PALESTRAS</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../admin/dashboardPalestrantes.php" class="nav-item">
                        <i class='bx bxs-user-detail iconItem'></i> <span class="textMenu">PALESTRANTES</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../admin/dashboardRelatorios.php" class="nav-item">
                        <i class='bx bxs-report iconItem'></i> <span class="textMenu">RELATÓRIOS</span>
                    </a>
                </li>
            </div>

            <div class="div-ul">
                <p class="textMenu">Outros</p>
                <li class="item-menu">
                    <a href="#" class="nav-item">
                        <i class='bx bx-cog iconItem'></i> <span class="textMenu">CONFIGURAÇÕES</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="../../home.php" class="nav-item">
                        <i class='bx bx-log-out iconItem'></i> <span class="textMenu">SAIR</span>
                    </a>
                </li>
            </div>
        </ul>
    </nav>
    <script src="../js/navbar.js"></script>

    <div id="content">
        <?php include('../templates/headerAdm.php'); ?>

        <div id="cabecalhoPagina">
            <div id="divCaminhos">
                <a class="caminhos">Dashboard/</a> <!--depois colocar aqui algo para ir acrescentando os caminhos -->
            </div>
            <div id="divTitulo">
                <h2 id="tituloPagina">Dashboard</h2>
            </div>
        </div>
