<?php
require_once('../../configuration/connect.php');

class EventosModel extends Connect {
    private $table = 'eventos';

    // Criar evento
    public function create($nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $endereco_id) {
        $stmt = $this->connection->prepare(
            "INSERT INTO $this->table (nome, categoria, descricao, visibilidade, status, banner, data_inicio, data_fim, endereco_evento_id) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->execute([$nome, $categoria, $descricao, $visibilidade, $status, $banner, $data_inicio, $data_fim, $endereco_id]);
        return $this->connection->lastInsertId();
    }

    public function getAll() {
        $sql = "SELECT e.id, e.nome, e.categoria, e.descricao, e.banner, en.nome_local, en.cidade, e.data_inicio, e.data_fim
                FROM eventos e
                JOIN enderecos_eventos en ON e.endereco_evento_id = en.id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }    

    public function buscarEvento($query){
        $sql = "SELECT e.id, e.nome, e.categoria, e.descricao, e.banner, en.nome_local, en.cidade, e.data_inicio, e.data_fim
                FROM eventos e
                JOIN enderecos_eventos en ON e.endereco_evento_id = en.id
                WHERE e.nome LIKE ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(["%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEvento($id){
        $sql = "SELECT e.id, e.nome, e.categoria, e.descricao, e.banner, en.nome_local, en.cidade, e.data_inicio, e.data_fim
                FROM eventos e
                JOIN enderecos_eventos en ON e.endereco_evento_id = en.id
                WHERE e.id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    // Deletar evento
    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}