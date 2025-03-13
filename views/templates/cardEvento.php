<?php
require_once('../../controllers/eventos.php');

$eventosController = new EventosController();
$cards = $eventosController->listarEventos();
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

<style>
#carousel-container {
    position: relative;
    display: flex;
    justify-content: center;
    overflow: hidden;
    width: 100%;
}

.carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 340px;
    height: 480px;
    border-radius: 10px;
    background: white;
    box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}
.card:hover {
    transform: scale(1.02);
    box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.15);
}

#imgCard {
    width: 100%;
    height: 35%;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

#divInfo {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 90%;
    padding: 10px 0;
    text-align: center;
}
#nomeCard {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}
#descricaoCard {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
}

.divIconContainer {
    display: flex;
    flex-direction: column;
    align-items: start;
    width: 90%;
    gap: 1rem;
    padding: 5px 0;
}
.divIcon {
    display: flex;
    align-items: center;
    gap: .5rem;
}
.divIcon i {
    font-size: 22px;
    color: #F78139;
}
.textIcon {
    font-size: 14px;
    color: #444;
}

#buttonRead {
    margin: 10px;
    background: #F78139;
    color: white;
    font-size: 16px;
    font-weight: 600;
    border: none;
    padding: 10px 20px;
    border-radius: 30px;
    cursor: pointer;
    transition: background 0.3s ease-in-out, transform 0.2s;
}
#buttonRead:hover {
    background: #ff5733;
    transform: scale(1.05);
}
#buttonRead:active {
    transform: scale(0.98);
}

.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #4B7198;
    color: white;
    border: none;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
    z-index: 10;
}
#prevBtn {
    left: 20px;
}
#nextBtn {
    right: 20px;
}
</style>

<script>

</script>
