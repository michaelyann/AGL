document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    
    // Dupliquer les slides pour assurer un défilement fluide
    slides.forEach(slide => {
        const clone = slide.cloneNode(true);
        track.appendChild(clone);
    });

    // Calculer la largeur totale nécessaire
    function updateSliderWidth() {
        const slideWidth = slides[0].offsetWidth;
        const totalWidth = slideWidth * slides.length * 2; // *2 pour les clones
        track.style.width = `${totalWidth}px`;
    }

    // Mettre à jour la largeur au chargement et au redimensionnement
    updateSliderWidth();
    window.addEventListener('resize', updateSliderWidth);

    // Réinitialiser l'animation quand elle se termine
    track.addEventListener('animationend', () => {
        track.style.animation = 'none';
        track.offsetHeight; // Forcer le reflow
        track.style.animation = 'slideBackAndForth 20s linear infinite alternate';
    });
});