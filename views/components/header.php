<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspira Talks</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" href="../css/images/logoSite.png" type="image/png">
    <?php if (isset($cssEspecifico)): ?>
        <link rel="stylesheet" href="<?= $cssEspecifico ?>">
    <?php endif; ?>
</head>
<body>
    <header id="header">
        <img id="logoHeader" src="../css/images/logos/logoDarkBlue.png" alt="Logo Inspira Talk">
        <nav id="nav-header">
                <a href="../participante/home.php" class="nav-item">EVENTOS</a>
                <a href="../sobreNos.php" class="nav-item">SOBRE NÓS</a>
                <a href="../login.php" class="nav-item"><i id="item-icon" class='bx bxs-user-circle'></i></a>
        </nav>
    </header>