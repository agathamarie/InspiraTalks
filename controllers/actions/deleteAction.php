<?php
require_once('../../controllers/eventoController.php');

if (isset($_POST['id'])) {
    $eventoController = new EventoController();
    $id = $_POST['id'];
    
    if ($eventoController->deletarEvento($id)) {
        header("Location: ../../views/organizador/dashboardEventos.php");
        exit;
    } else {
        echo "Erro ao excluir o evento.";
    }
} else {
    echo "ID do evento não encontrado.";
}
?>
