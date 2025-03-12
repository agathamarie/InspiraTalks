<?php
require_once('../../controllers/sliderHome.php');

$sliderController = new SliderHomeController();
$cards = $sliderController->listarAll();

$i = 0;
?>

<section class="slider-container">
    <div class="slider">
        <?php foreach ($cards as $index => $card): ?>
            <div class="slide">
                <img src="../css/images/sliderHome/<?=htmlspecialchars($card['arquivo'])?>" alt="<?= htmlspecialchars($card['name']) ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="slider-navigation">
        <?php foreach ($cards as $index => $card): ?>
            <label for="slide<?= $index + 1 ?>"></label>
        <?php endforeach; ?>
    </div>
</section>

<Style>
.slider-container {
    position: relative;
    width: 100%;
    margin: auto;
    overflow: hidden;
}

.slider {
    display: flex;
    width: 100%;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
}

img {
    width: 100%;
    display: block;
}

/* Bolinhas */
.slider-navigation {
    display: flex;
    justify-content: center;
    margin-top: 10px;
    position: relative;
    top: -35px;
}

.slider-navigation label {
    width: 14px;
    height: 14px;
    background: none;
    border-style: solid;
    border-color: #ffff;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background 0.1s ease-in-out;
}

.slider-navigation label:hover {
    background: #ffff;
}
</style>

<script>
let index = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function nextSlide() {
    index = (index + 1) % totalSlides;
    document.getElementById(`slide${index + 1}`).checked = true;
}

setInterval(nextSlide, 5000); // Mudar de slide a cada 5 segundos
</script>