<?php
$cssEspecifico = "../css/dashboardEventos.css"; 
$modalEspecifico = "Evento";

require_once('../../controllers/eventoController.php');
$eventosController = new EventoController();
$eventos = [];
$eventos = $eventosController->listarEventos();
?>

<?php include('../components/navbar.php'); ?>

    <div id="contentAdm">
        
        <?php include('../components/crud.php'); ?>

        <?php include('../components/listas.php'); ?>

    </div>
</div>