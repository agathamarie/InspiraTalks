<?php
require_once('../../configuration/connect.php');

class EnderecoModel extends Connect {
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'enderecoEvento';
    }

    public function create($estado, $cidade, $bairro, $rua, $numero, $nome_local) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (estado, cidade, bairro, rua, numero, nome_local) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$estado, $cidade, $bairro, $rua, $numero, $nome_local]);
        return $this->connection->lastInsertId();
    }
}
?>
