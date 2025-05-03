$(document).ready(function () {
    const $slider = $("#slideshow .slides");
    const $slides = $slider.find(".slide");
    const slideCount = $slides.length;
    const slideWidth = $slides.first().outerWidth() + 20; // Account for the margin on each side
    let currentIndex = 0;

    // Clone the first slide and append it to the end
    const $firstClone = $slides.first().clone();
    $slider.append($firstClone);

    // Set total width of the slider to accommodate all slides + clone
    $slider.css("width", slideWidth * (slideCount + 1));

    function goToSlide(index) {
        $slider.animate({
            left: -index * slideWidth
        }, 1000, function () {
            // If we're at the cloned slide, jump back to the real first slide
            if (index === slideCount) {
                $slider.css("left", 0);
                currentIndex = 0;
            }
        });
    }

    setInterval(function () {
        currentIndex++;
        goToSlide(currentIndex);
    }, 4000);
});
