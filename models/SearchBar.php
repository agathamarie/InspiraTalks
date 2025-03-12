<?php
require_once('../../configuration/connect.php');

class SearchModel extends Connect {
    private $table = "table";

    public function search($query) {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE name LIKE ?");
        $stmt->execute(["%$query%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>