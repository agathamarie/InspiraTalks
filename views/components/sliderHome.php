<?php
require_once('../../controllers/sliderHome.php');

$sliderController = new SliderHomeController();
$cards = $sliderController->listarAll();
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
            <div class="dot" data-index="<?= $index ?>"></div>
        <?php endforeach; ?>
    </div>
</section>

<style>
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
    transition: opacity 0.5s ease-in-out;
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
    position: absolute;
    bottom: 10px;
    width: 100%;
    z-index: 10;
}

.dot {
    width: 13px;
    height: 13px;
    background: none;
    border-radius: 50%;
    border: solid;
    border-color: #ffff;
    margin: 0 5px;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
}
.dot.active {
    background: #ffff;
}
</style>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    if (index < 0) {
        currentSlide = slides.length - 1;
    } else if (index >= slides.length) {
        currentSlide = 0;
    } else {
        currentSlide = index;
    }

    document.querySelector('.slider').style.transform = `translateX(-${currentSlide * 100}%)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentSlide].classList.add('active');
}

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = parseInt(dot.getAttribute('data-index'));
        showSlide(index);
    });
});

function nextSlide() {
    showSlide(currentSlide + 1);
}

setInterval(nextSlide, 5000);
showSlide(currentSlide);
</script>