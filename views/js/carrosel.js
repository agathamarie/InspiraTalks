document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (!carousel || !prevBtn || !nextBtn) return;

    let cards = document.querySelectorAll('.card');
    const spacing = 20;
    let cardWidth = cards[0].offsetWidth;
    let moveAmount = cardWidth + spacing;

    function updateDimensions() {
        cards = document.querySelectorAll('.card');
        cardWidth = cards[0].offsetWidth;
        moveAmount = cardWidth + spacing;
    }

    // NEXT
    nextBtn.addEventListener('click', () => {
        carousel.style.transition = 'transform 0.5s ease-in-out';
        carousel.style.transform = `translateX(-${moveAmount}px)`;

        carousel.addEventListener('transitionend', () => {
            carousel.appendChild(carousel.firstElementChild);
            carousel.style.transition = 'none';
            carousel.style.transform = 'translateX(0)';
        }, { once: true });
    });

    // PREV
    prevBtn.addEventListener('click', () => {
        carousel.style.transition = 'none';
        carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
        carousel.style.transform = `translateX(-${moveAmount}px)`;

        setTimeout(() => {
            carousel.style.transition = 'transform 0.5s ease-in-out';
            carousel.style.transform = 'translateX(0)';
        }, 20);
    });

    window.addEventListener('resize', updateDimensions);
});
