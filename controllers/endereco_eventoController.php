<?php
require_once('../../models/endereco_eventoModel.php');

class EnderecoEventoController {
    private $model;

    public function __construct() {
        $this->model = new EnderecoEventoModel();
    }

    public function salvarEndereco($estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $endereco_evento_id = $this->model->criarEnderecoEvento($estado, $cidade, $bairro, $rua, $numero, $nome_local);
        return $endereco_evento_id;
    }

    public function alterarEndereco($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $this->model->alterarEnderecoEvento($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local);
    }

    public function deletarEndereco($id) {
        $this->model->deletarEnderecoEvento($id);
    }
}
