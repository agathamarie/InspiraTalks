<?php
require_once('C:/xampp/htdocs/InspiraTalks/configuration/connect.php');


class SliderHome extends Connect {
    private $table;

    function __construct() {
        parent::__construct();
        $this->table = 'sliderHome';
    }

    public function create($name, $arquivo) {
        $stmt = $this->connection->prepare("INSERT INTO $this->table (name, arquivo) VALUES (?, ?)");
        return $stmt->execute([$name, $arquivo]);
    }

    public function read($id) {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($name, $arquivo, $id) {
        $stmt = $this->connection->prepare("UPDATE $this->table SET name = ?, arquivo = ? WHERE ID = ?");
        $stmt->execute([$name, $arquivo, $id]);
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function listarAll() {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
