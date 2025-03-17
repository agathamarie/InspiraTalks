<?php
require_once('../../models/fotos_evento.php');

class FotosEventosController {
    private $model;

    // Construtor - instanciar a model
    public function __construct() {
        $this->model = new FotosEventosModel();
    }

    // Criar foto de evento
    public function salvar($arquivo, $evento_id) {
        $foto_id = $this->model->create($arquivo, $evento_id);
        echo "Foto criada com sucesso, ID: " . $foto_id;
    }

    // Deletar foto de evento
    public function deletar($id) {
        $this->model->delete($id);
        echo "Foto deletada com sucesso!";
    }
}
