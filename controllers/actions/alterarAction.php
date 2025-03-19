<?php
require_once('../../controllers/eventoController.php');

if (isset($_POST['id'])) {
    $eventoController = new EventoController();
    $id = $_POST['id'];
    
    if ($eventoController->alterarEvento($nome, $categoria, $descricao,$visibilidade, $status, $banner, $data_inicio, $data_fim, $id, $estado, $cidade, $bairro, $rua, $numero, $nome_local, $id_endereco)) {
        header("Location: ../../views/organizador/dashboardEventos.php");
        exit;
    } else {
        echo "Erro ao editar o evento.";
    }
} else {
    echo "ID do evento não encontrado.";
}
?>
