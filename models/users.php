<?php
require_once('./configuration/connect.php');

class UserModel extends Connect{
    private $table;

    function __construct(){
        parent::__construct();
        $this->table = 'Users';
    }

    public function createUser($name, $email, $senha, $role, $createdBy = null) {
        $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $this->connection->prepare("INSERT INTO $this->table (name, email, senha, role, created_by) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $email, $hashedSenha, $role, $createdBy]);
    }

    public function getUserById($id) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUsersByRole($role) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE role = ?");
        $stmt->execute([$role]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id) {
        $stmt = $this->connection->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>