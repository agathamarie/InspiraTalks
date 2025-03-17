<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dados = $_POST;
    $banner = $_FILES['banner'];

    require_once('../../models/enderecos_eventos.php');
    require_once('../../models/eventos.php');

    $enderecoModel = new EnderecosEventosModel();
    $eventoModel = new EventosModel();

    // Criar o endereço
    $endereco_id = $enderecoModel->create(
        $dados['estado'],
        $dados['cidade'],
        $dados['bairro'],
        $dados['rua'],
        $dados['numRua'],
        $dados['nome_local']
    );

    // Salvar o banner
    $uploadDir = '../../uploads/';
    $uploadPath = $uploadDir . basename($banner['name']);

    if (move_uploaded_file($banner['tmp_name'], $uploadPath)) {
        echo "Banner salvo com sucesso!<br>";
    } else {
        echo "Erro ao salvar banner!<br>";
    }

    // Criar o evento com o nome do banner salvo
    $evento_id = $eventoModel->create(
        $dados['nome'],
        $dados['categoria'],
        $dados['descricao'],
        $dados['visibilidade'],
        $dados['status'],
        $banner['name'],
        $dados['data_inicio'],
        $dados['data_fim'],
        $endereco_id
    );

    header('Location: ../../views/organizador/dashboardEventos.php');
    exit;
}