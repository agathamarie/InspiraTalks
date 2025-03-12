<?php
require_once('C:/xampp/htdocs/InspiraTalks/models/sliderHome.php');

class SliderHomeController {
    private $model;

    function __construct() {
        $this->model = new SliderHome();
    }

    public function create($name, $arquivo) {
        return $this->model->create($name, $arquivo);
    }

    public function read($id) {
        return $this->model->read($id);
    }

    public function update($name, $arquivo, $id) {
        return $this->model->update($name, $arquivo, $id);
    }

    public function delete($id) {
        return $this->model->delete($id);
    }

    public function listarAll() {
        $cards = $this->model->listarAll();
        return $cards;
    }

    public function uploadImagem($name, $file) {
        $diretorio = 'views/css/images/sliderHome/';

        if ($file['error'] == 0) {
            $nomeArquivo = uniqid() . '-' . basename($file['name']);
            $caminhoDestino = $diretorio . $nomeArquivo;

            if (move_uploaded_file($file['tmp_name'], $caminhoDestino)) {
                return $this->model->create($name, $caminhoDestino);
            } else {
                return false;
            }
        }
        return false;
    }
}
?>

<!-- PARA O FORM DE PEGAR OS SLIDER DEPOIS :) -->

<!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Nome da imagem" required>
    <input type="file" name="imagem" required>
    <button type="submit">Enviar</button>
</form>

require_once('./controllers/SliderHomeController.php');

$sliderController = new SliderHomeController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagem'])) {
    $name = $_POST['name'];
    $file = $_FILES['imagem'];

    if ($sliderController->uploadImagem($name, $file)) {
        echo "Imagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar imagem!";
    }
}
-->
