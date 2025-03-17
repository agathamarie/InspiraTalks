<!-- header -->
<?php
$cssEspecifico = "../css/dashboardEventos.css"; 
$modalEspecifico = "Evento";

require_once('../../controllers/eventos.php');
$eventosController = new EventosController();
$eventos = [];

$eventoModel = new EventosModel();
$eventos = $eventoModel->getAll();
?>

<!-- header -->
<?php include('../components/navbar.php'); ?>

    <div id="contentAdm">
        
        <?php include('../components/crud.php'); ?>

        <?php include('../components/listaEventos.php'); ?>

    </div>

</div>