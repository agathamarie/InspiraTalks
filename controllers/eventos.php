<?php
require_once('../../models/eventos.php');
require_once('../../models/enderecos_eventos.php');

class EventosController {
    private $eventoModel;
    private $enderecoModel;

    // Construtor - instanciar as models
    public function __construct() {
        $this->eventoModel = new EventosModel();
        $this->enderecoModel = new EnderecosEventosModel();
    }

    // Salvar e Criar de verdade o Evento
    public function salvar($nome, $categoria, $descricao,$visibilidade, $status, $banner, $data_inicio, $data_fim, $estado, $cidade, $bairro, $rua, $nome_local) {
        // Salvar o endereço do evento
        $enderecoController = new EnderecosEventosController();
        $enderecoId = $enderecoController->salvar($estado, $cidade, $bairro, $rua, $nome_local);

        // Criar o evento
        $eventoModel = new EventosModel();
        $eventoId = $eventoModel->create($nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $enderecoId);

        // Exibir resultado
        if ($eventoId) {
            echo "Evento criado com sucesso, ID: " . $eventoId;
        } else {
            echo "Erro ao criar evento.";
        }
    }

    // Atualizar evento
    public function atualizar($id, $nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $endereco_evento_id) {
        $this->eventoModel->update($id, $nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $endereco_evento_id);
        echo "Evento atualizado com sucesso!";
    }

    // Deletar evento
    public function delete($id) {
        $eventoModel = new EventosModel();
        return $eventoModel->delete($id);
        header('Location: listaEventos.php');
    }
}