<?php
require_once('../../models/palestras.php');

class PalestrasController {
    private $model;

    public function __construct() {
        $this->model = new PalestrasModel(); 
    }

    public function salvar($nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id) {
        $palestraId = $this->model->create($nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id);

        if ($palestraId) {
            echo "Palestra criada com sucesso, ID: " . $palestraId;
        } else {
            echo "Erro ao criar palestra.";
        }
    }

    public function atualizar($id, $nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id) {
        $this->model->update($id, $nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id);
        echo "Palestra atualizada com sucesso!";
    }

    public function delete($id) {
        return $this->model->delete($id);
        header('Location: listaPalestras.php');
    }
}
?>