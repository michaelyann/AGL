const track = document.querySelector('.carousel-track');
const btnLeft = document.querySelector('.carousel-btn.left');
const btnRight = document.querySelector('.carousel-btn.right');

let index = 0;

btnRight.addEventListener('click', () => {
    const items = document.querySelectorAll('.carousel-item');
    index = (index + 1) % items.length;
    track.style.transform = `translateX(-${index * 320}px)`;
});

btnLeft.addEventListener('click', () => {
    const items = document.querySelectorAll('.carousel-item');
    index = (index - 1 + items.length) % items.length;
    track.style.transform = `translateX(-${index * 320}px)`;
});