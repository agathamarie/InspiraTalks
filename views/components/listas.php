<link rel="stylesheet" href="../css/listas.css">

<!-- Eventos -->
<table id="listas">
    <thead>
        <tr>
            <th>Evento</th>
            <th>Categoria</th>
            <th>Local</th>
            <th>Data</th>
            <th>Participantes</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?php echo htmlspecialchars($evento['nome']); ?></td>
                <td><?php echo htmlspecialchars($evento['categoria']); ?></td>
                <td><?php echo htmlspecialchars($evento['nome_local']) . ' - ' . htmlspecialchars($evento['cidade']); ?></td>
                <td><?php echo date('d/m/Y', strtotime($evento['data_inicio'])); ?> à <?php echo date('d/m/Y', strtotime($evento['data_fim'])); ?></td>
                <td><?php echo 'Por enquanto nada'; ?></td>
                <td>
                    <?php include('../components/buttonAlterar.php') ?>
                    <?php include('../components/buttonExcluir.php') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>