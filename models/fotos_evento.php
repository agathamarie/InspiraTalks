<?php
require_once('../../configuration/connect.php');

class FotosEventosModel extends Connect {
    private $table = 'fotos_evento';

    // Criar foto de evento
    public function create($arquivo, $evento_id) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (arquivo, evento_id) VALUES (?, ?)");
        $stmt->execute([$arquivo, $evento_id]);
        return $this->connection->lastInsertId();
    }

    // Deletar foto de evento
    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}