<?php
require_once('../../controllers/palestras.php');

$palestraController = new PalestrasController();
$palestras = [];
?>

<section id="carousel-container">
    <div class="carousel">
        <?php foreach ($cards as $index => $card): ?>
        <div class="card">
            <img id="imgCard" src="../css/images/bannersEvento/<?= htmlspecialchars($card['banner']) ?>" alt="Banner do Evento">

            <div id="divInfo">
                <p id="nomeCard"><?= htmlspecialchars($card['nome']) ?></p>
                <p id="descricaoCard"><?= htmlspecialchars($card['descricao']) ?></p>
            </div>
            
            <div class="divIconContainer">
                <div class="divIcon">
                    <i class='bx bxs-calendar'></i>
                    <p class="textIcon" id="data"><?= htmlspecialchars($card['data_inicio']) . ' - ' . htmlspecialchars($card['data_fim']) ?></p>
                </div>

                <div class="divIcon">
                    <i class='bx bxs-map'></i>
                    <p class="textIcon" id="local">
                        <?= htmlspecialchars($card['nome_local'] ?? 'Local não informado') . ' - ' . htmlspecialchars($card['cidade']) ?>
                    </p>
                </div>
            </div>

            <button id="buttonRead" onclick="window.location.href='detalhesEvento.php?id=<?= $card['id'] ?>'">VER MAIS!</button>
        </div>
        <?php endforeach; ?>
    </div>
    <button id="prevBtn" class="carousel-btn">◀</button>
    <button id="nextBtn" class="carousel-btn">▶</button>
</section>

<script src="../js/carrosel.js"></script>
