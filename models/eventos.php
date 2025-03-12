<?php
require_once('../../configuration/connect.php');

class EventosModel extends Connect {
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'eventos';
    }

    public function create($nome, $descricao, $visibilidade, $status, $banner, $periodo_data, $endereco_evento_id) {
        $stmt = $this->connection->prepare("INSERT INTO eventos (nome, descricao, visibilidade, status, banner, periodo_data, endereco_evento_id) 
                                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$nome, $descricao, $visibilidade, $status, $banner, $periodo_data, $endereco_evento_id]);
    }

    public function read($id) {
        $stmt = $this->connection->prepare("SELECT e.*, en.estado, en.cidade, en.bairro, en.rua, en.numero, en.nome_local 
                                           FROM $this->table e 
                                           INNER JOIN enderecoEvento en ON e.endereco_evento_id = en.id
                                           WHERE e.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nome, $descricao, $visibilidade, $status, $banner, $endereco_evento_id) {
        $stmt = $this->connection->prepare("UPDATE $this->table SET nome = ?, descricao = ?, visibilidade = ?, status = ?, banner = ?, endereco_evento_id = ? WHERE id = ?");
        return $stmt->execute([$nome, $descricao, $visibilidade, $status, $banner, $endereco_evento_id, $id]);
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function listarAll() {
        $stmt = $this->connection->prepare("SELECT e.*, en.estado, en.cidade, en.bairro, en.rua, en.numero, en.nome_local 
                                           FROM $this->table e 
                                           INNER JOIN enderecoEvento en ON e.endereco_evento_id = en.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>