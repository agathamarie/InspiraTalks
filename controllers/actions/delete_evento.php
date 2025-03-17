<?php
require_once __DIR__ . '/../eventos.php';

if (isset($_POST['id'])) {
    $eventoController = new EventosController();
    $id = $_POST['id'];
    
    if ($eventoController->delete($id)) {
        header("Location: ../../views/organizador/dashboardEventos.php");
        exit;
    } else {
        echo "Erro ao excluir o evento.";
    }
} else {
    echo "ID do evento não encontrado.";
}
?>
