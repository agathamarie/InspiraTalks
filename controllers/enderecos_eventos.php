<?php
require_once('../../models/enderecos_eventos.php');

class EnderecosEventosController {
    private $model;

    // Construtor - instanciar a model
    public function __construct() {
        $this->model = new EnderecosEventosModel();
    }

    // Criar endereço de evento
    public function salvar($estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $endereco_evento_id = $this->model->create($estado, $cidade, $bairro, $rua, $numero, $nome_local);
        echo "Endereço salvo, ID: " . $enderecoId . "<br>"; // tirar depois
        return $endereco_evento_id;
    }

    // Atualizar endereço de evento
    public function atualizar($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $this->model->update($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local);
        echo "Endereço de evento atualizado com sucesso!";
    }

    // Deletar endereço de evento
    public function deletar($id) {
        $this->model->delete($id);
        echo "Endereço de evento deletado com sucesso!";
    }
}
