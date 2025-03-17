<table>
    <thead>
        <tr>
            <th>Palestra</th>
            <th>Categoria</th>
            <th>Evento</th>
            <th>Local</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Capacidade Máxima</th>
            <th>Participantes</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($palestras as $palestra): ?>
            <tr>
                <td><?php echo htmlspecialchars($palestra['nome']); ?></td>
                <td><?php echo htmlspecialchars($palestra['categoria']); ?></td>
                <td><?php echo htmlspecialchars($palestra['evento_nome']); ?></td>
                <td><?php echo htmlspecialchars($palestra['nome_local']) . ' - ' . htmlspecialchars($palestra['cidade']); ?></td>
                <td><?php echo htmlspecialchars($palestra['data']); ?></td>
                <td><?php echo date('d/m/Y', strtotime($palestra['horario_inicio'])); ?> à <?php echo date('d/m/Y', strtotime($palestra['horario_fim'])); ?></td>
                <td><?php echo $palestra['num_participantes'] . ' / ' . htmlspecialchars($palestra['capacidade_max']); ?></td>
                <td> <!-- Colocar aqui o botão que abre a lista de participantes, se necessário --></td>
                <td>
                    <button class="btn edit-btn"><i class="bx bx-edit"></i></button>

                    <!-- Formulário de exclusão -->
                    <form action="../../controllers/actions/delete_evento.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $palestra['id']; ?>" />
                        <button type="submit" class="btn delete-btn" onclick="return confirm('Você tem certeza que deseja excluir este evento?')">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .btn {
        padding: 5px 10px;
        margin-right: 5px;
        cursor: pointer;
        border: none;
        font-size: 18px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .edit-btn {
        color: #4CAF50;
        background-color: rgba(76, 175, 80, 0.2);
    }
    .delete-btn {
        color: #f44336;
        background-color: rgba(244, 67, 54, 0.2);
    }
    .btn:hover {
        opacity: 0.8;
    }
</style>