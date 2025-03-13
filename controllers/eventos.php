<?php
require_once('../../models/eventos.php');
require_once('../../models/enderecoEvento.php');

class EventosController {
    private $eventosModel;
    private $enderecoModel;

    function __construct() {
        $this->eventosModel = new EventosModel();
        $this->enderecoModel = new EnderecoModel();
    }

    public function createEvento($dadosEvento, $dadosEndereco, $file) {
        $endereco_id = $this->enderecoModel->create(
            $dadosEndereco['estado'],
            $dadosEndereco['cidade'],
            $dadosEndereco['bairro'],
            $dadosEndereco['rua'],
            $dadosEndereco['numero'],
            $dadosEndereco['nome_local']
        );

        $banner = $this->uploadImagem($file);
        
        return $this->eventosModel->create(
            $dadosEvento['nome'],
            $dadosEvento['descricao'],
            $dadosEvento['visibilidade'],
            $dadosEvento['status'],
            $banner,
            $dadosEvento['periodo_data'],
            $endereco_id
        );
    }

    public function listarEventos() {
        $cards = $this->eventosModel->listarAll();
        return $cards;
    }

    public function getEvento($id) {
        return $this->eventosModel->read($id);
    }

    public function atualizarEvento($id, $dadosEvento) {
        return $this->eventosModel->update(
            $id,
            $dadosEvento['nome'],
            $dadosEvento['descricao'],
            $dadosEvento['visibilidade'],
            $dadosEvento['status'],
            $dadosEvento['banner'],
            $dadosEvento['endereco_evento_id']
        );
    }

    public function deletarEvento($id) {
        return $this->eventosModel->delete($id);
    }

    public function uploadImagem($file) {
        $diretorio = 'views/css/images/bannersEvento/';

        if ($file['error'] == 0) {
            $nomeArquivo = uniqid() . '-' . basename($file['name']);
            $caminhoDestino = $diretorio . $nomeArquivo;

            if (move_uploaded_file($file['tmp_name'], $caminhoDestino)) {
                return $caminhoDestino; 
            } else {
                return false;
            }
        }
        return false;
    }
}
?>
