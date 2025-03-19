<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = $_POST;
    $banner = $_FILES['banner'];

    require_once('../../controllers/eventoController.php');
    $eventoController = new EventoController();

    $uploadDir = '../../uploads/';
    $uploadPath = $uploadDir . basename($banner['name']);
    if (move_uploaded_file($banner['tmp_name'], $uploadPath)) {
        echo "Banner salvo com sucesso!<br>";
    } else {
        echo "Erro ao salvar banner!<br>";
    }

    $evento_id = $eventoController->salvarEvento(
        $dados['nome'],
        $dados['categoria'],
        $dados['descricao'],
        $dados['visibilidade'],
        $dados['status'],
        $banner['name'],
        $dados['data_inicio'],
        $dados['data_fim'],
        $dados['estado'],
        $dados['cidade'],
        $dados['bairro'],
        $dados['rua'],
        $dados['numRua'],
        $dados['nome_local'],
    );

    header('Location: ../../views/organizador/dashboardEventos.php');
    exit;
}