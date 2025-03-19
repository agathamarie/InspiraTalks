<?php
require_once('../../models/eventoModel.php');
require_once('../../controllers/endereco_eventoController.php');

class EventoController {
    private $eventoModel;
    private $enderecoController;

    public function __construct() {
        $this->eventoModel = new EventoModel();
        $this->enderecoController = new EnderecoEventoController();
    }

    public function salvarEvento($nome, $categoria, $descricao,$visibilidade, $status, $banner, $data_inicio, $data_fim, $estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $enderecoId = $this->enderecoController->salvarEndereco($estado, $cidade, $bairro, $rua, $numero, $nome_local);
        $eventoId = $this->eventoModel->criarEvento($nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $enderecoId);
    }

    public function alterarEvento($nome, $categoria, $descricao,$visibilidade, $status, $banner, $data_inicio, $data_fim, $id, $estado, $cidade, $bairro, $rua, $numero, $nome_local, $id_endereco) {
        return $this->eventoModel->alterarEvento($nome, $categoria, $descricao,$visibilidade, $status, $banner, $data_inicio, $data_fim, $id);
        return $this->enderecoController->alterarEndereco($estado, $cidade, $bairro, $rua, $numero, $nome_local, $id_endereco);
    }

    public function deletarEvento($id) {
        return $this->eventoModel->deletarEvento($id);
        header('Location: listas.php');
    }


    public function listarEventos(){
        return $this->eventoModel->pegarTodosEventos();
    }
}