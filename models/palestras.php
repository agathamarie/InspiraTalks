<?php
require_once('../../configuration/connect.php');

class PalestrasModel extends Connect {
    private $table = 'palestras';

    public function create($nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id) {
        $stmt = $this->connection->prepare(
            "INSERT INTO $this->table (nome, categoria, descricao, capacidade_max, visibilidade, status, banner, data, horario_inicio, horario_fim, evento_id) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->execute([$nome, $categoria, $descricao, $capacidade_max, $visibilidade, $status, $banner, $data, $horario_inicio, $horario_fim, $evento_id]);
        return $this->connection->lastInsertId();
    }

    public function getAll() {
        $sql = "SELECT p.id, p.nome, p.categoria, p.descricao, p.capacidade_max, 
                       p.visibilidade, p.status, p.banner, p.data, 
                       p.horario_inicio, p.horario_fim, e.nome AS evento_nome,
                       ee.nome_local, ee.cidade,
                       (SELECT COUNT(*) FROM inscricoes i WHERE i.palestra_id = p.id) AS num_participantes
                FROM palestras p
                JOIN eventos e ON p.evento_id = e.id
                JOIN enderecos_eventos ee ON e.endereco_evento_id = ee.id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>