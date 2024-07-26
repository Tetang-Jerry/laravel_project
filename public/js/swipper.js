document.addEventListener('DOMContentLoaded', function() {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const slides = document.querySelectorAll('.slider-slide');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;

    function updateSlider() {
        const viewportWidth = window.innerWidth;
        console.log(viewportWidth );
        let slidesToShow = 1;

        if (viewportWidth >= 1024) {
            slidesToShow = 3;
        } else if (viewportWidth >= 640) {
            slidesToShow = 2;
        }

        const offset = -(currentIndex * (100 / slidesToShow));
        sliderWrapper.style.transform = `translateX(${offset}%)`;
    }

    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    nextBtn.addEventListener('click', function() {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    window.addEventListener('resize', function() {
        updateSlider();
    });

    updateSlider();
});
