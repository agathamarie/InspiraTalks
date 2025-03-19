<?php
require_once('../../configuration/connect.php');

class EnderecoEventoModel extends Connect {
    private $table = 'endereco_evento';

    public function criarEnderecoEvento($estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (estado, cidade, bairro, rua, numero, nome_local) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$estado, $cidade, $bairro, $rua, $numero, $nome_local]);
        return $this->connection->lastInsertId();
    }

    public function alterarEnderecoEvento($id, $estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $stmt = $this->connection->prepare("UPDATE $this->table SET estado = ?, cidade = ?, bairro = ?, rua = ?, numero = ?, nome_local = ? WHERE id = ?");
        return $stmt->execute([$estado, $cidade, $bairro, $rua, $numero, $nome_local, $id]);
    }

    public function deletarEnderecoEvento($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
