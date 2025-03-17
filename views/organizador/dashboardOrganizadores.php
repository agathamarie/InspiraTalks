<!-- header -->
<?php
$cssEspecifico = "../css/dashboardOrganizadores.css"; 
$modalEspecifico = "Organizadores";

require_once('../../controllers/organizadores.php');
$organizadoresController = new EventosController();
$organizadores = [];


?>

<!-- header -->
<?php include('../components/navbar.php'); ?>

    <div id="contentAdm">
        
        <?php include('../components/crud.php'); ?>

        <?php include('../components/listaOrganizadores.php'); ?>

    </div>

</div>