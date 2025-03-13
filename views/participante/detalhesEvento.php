<?php
$cssEspecifico = "../css/detalhesEvento.css"; 

require_once('../../controllers/eventos.php');
$eventosController = new EventosController();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $evento = $eventosController->getEvento($_GET['id']);

    if (!$evento) {
        echo "Evento não encontrado!";
        exit;
    }
} else {
    echo "ID inválido!";
    exit;
}
?>

<!-- header -->
<?php include('../templates/header.php'); ?>

<section id="sectionEvento">
    <div id="contentSection">
        <!-- <img id="imgBanner" src="<?= htmlspecialchars($evento['banner']) ?>" alt="Banner do Evento"> -->
        <img id="imgBanner" src="../css/images/sliderHome/img1.png" alt="Banner do Evento">
        <div id="contentEvento">
            <h1><?= htmlspecialchars($evento['nome']) ?></h1>
            <div class="divIconContainer">
                    <div class="divIcon">
                        <i class='bx bxs-calendar'></i>
                        <p class="textIcon" id="data"><?= htmlspecialchars(string: $evento['data_inicio']) . ' - ' . htmlspecialchars($evento['data_fim']) ?></p>
                    </div>

                    <div class="divIcon">
                        <i class='bx bxs-map'></i>
                        <p class="textIcon" id="local">
                            <?= htmlspecialchars($evento['nome_local'] ?? 'Local não informado') . ' | ' . htmlspecialchars($evento['rua']) . ', ' . htmlspecialchars($evento['numero']) . ' - ' . htmlspecialchars($evento['bairro']) . ', ' . htmlspecialchars($evento['cidade']) . ' - ' . htmlspecialchars($evento['estado']) ?>
                        </p>
                    </div>

                    <hr>

                    <h3>Sobre o Evento</h3>
                    <p><?= htmlspecialchars($evento['descricao']) ?></p>

                    <hr>

                    <h3>Palestras</h3>
                </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include('../templates/footer.php'); ?>