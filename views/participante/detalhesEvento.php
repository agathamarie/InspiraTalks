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
<?php include('../components/header.php'); ?>

<section id="sectionEvento">
    <div id="contentSection">
        <!-- <img id="imgBanner" src="<?= htmlspecialchars($evento['banner']) ?>" alt="Banner do Evento"> -->
        <img id="imgBanner" src="../css/images/sliderHome/img1.png" alt="Banner do Evento">
        <div id="contentEvento">
            <h1><?= htmlspecialchars($evento['nome'] ?? 'Nome não disponível') ?></h1>

            <div class="divIconContainer">
                <div class="divs">
                    <div class="divIcon">
                        <i class='bx bxs-calendar'></i>
                        <p class="textIcon" id="data"><?= htmlspecialchars($evento['data_inicio'] ?? 'Data de início não disponível') . ' - ' . htmlspecialchars($evento['data_fim'] ?? 'Data de fim não disponível') ?></p>
                    </div>

                    <div class="divIcon">
                        <i class='bx bxs-map'></i>
                        <p class="textIcon" id="local">
                            <?= htmlspecialchars($evento['nome_local'] ?? 'Local não informado') . ' | ' . htmlspecialchars($evento['rua'] ?? '') . ', ' . htmlspecialchars($evento['numero'] ?? '') . ' - ' . htmlspecialchars($evento['bairro'] ?? '') . ', ' . htmlspecialchars($evento['cidade'] ?? '') . ' - ' . htmlspecialchars($evento['estado'] ?? '') ?>
                        </p>
                    </div>
                </div>

                <hr>

                <div class="divs">
                    <h3>Sobre o Evento</h3>
                    <p><?= htmlspecialchars($evento['descricao'] ?? 'Descrição não disponível') ?></p>
                </div>

                <hr>
                <div class="divs">
                    <h3>Palestras</h3>
                    <?php include('../components/cardPalestra.php'); ?>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include('../components/footer.php'); ?>