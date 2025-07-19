let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function moveToNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSliderPosition();
}

function moveToPrevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSliderPosition();
}

function updateSliderPosition() {
    const newTransformValue = `translateX(-${currentIndex * 100}%)`;
    document.querySelector('.slider').style.transform = newTransformValue;
}

// Change slide every 10 seconds
setInterval(moveToNextSlide, 10000);

// Add event listeners for previous and next buttons
document.querySelector('.prev').addEventListener('click', moveToPrevSlide);
document.querySelector('.next').addEventListener('click', moveToNextSlide);
