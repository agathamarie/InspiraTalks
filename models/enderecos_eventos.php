<?php
require_once('../../configuration/connect.php');

class EnderecosEventosModel extends Connect {
    private $table = 'enderecos_eventos';

    // Criar endereço de evento
    public function create($estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (estado, cidade, bairro, rua, numero, nome_local) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$estado, $cidade, $bairro, $rua, $numero, $nome_local]);
        return $this->connection->lastInsertId();
    }

    // Atualizar endereço de evento
    public function update($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $stmt = $this->connection->prepare("UPDATE $this->table SET estado = ?, cidade = ?, bairro = ?, rua = ?, numero = ?, nome_local = ? WHERE id = ?");
        return $stmt->execute([$estado, $cidade, $bairro, $rua, $numero, $nome_local, $id]);
    }

    // Deletar endereço de evento
    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
