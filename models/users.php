<?php
require_once('./configuration/connect.php');

class UsersModel extends Connect {
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    public function createUser($nome, $sobrenome, $data_nascimento, $cpf, $genero, $email, $senha, $role, $biografia = null, $foto = null) {
        $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $this->connection->prepare("INSERT INTO $this->table (nome, sobrenome, data_nascimento, cpf, genero, email, senha, role, biografia, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$nome, $sobrenome, $data_nascimento, $cpf, $genero, $email, $hashedSenha, $role, $biografia, $foto]);
    }

    public function getUserById($id) {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUsersByRole($role) {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE role = ?");
        $stmt->execute([$role]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function updateUser($id, $nome, $sobrenome, $data_nascimento, $cpf, $genero, $email, $senha = null, $biografia = null, $foto = null) {
        $setClause = "nome = ?, sobrenome = ?, data_nascimento = ?, cpf = ?, genero = ?, email = ?, biografia = ?, foto = ?";
        $params = [$nome, $sobrenome, $data_nascimento, $cpf, $genero, $email, $biografia, $foto];

        if ($senha) {
            $setClause .= ", senha = ?";
            $params[] = password_hash($senha, PASSWORD_DEFAULT);
        }

        $stmt = $this->connection->prepare("UPDATE $this->table SET $setClause WHERE id = ?");
        $params[] = $id;
        return $stmt->execute($params);
    }

    public function deleteUser($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>