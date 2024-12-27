jQuery(document).ready(function($) {
    // Инициализация слайдера
    $('.photo-slider').each(function() {
        var $slider = $(this);
        var $slides = $slider.find('.slides');
        var $slide = $slides.find('.slide');
        var currentIndex = 0;
        var slideCount = $slide.length;

        // Показать первый слайд
        $slide.hide();
        $slide.eq(currentIndex).show();

        // Функция для перехода на следующий слайд
        function goToSlide(index) {
            $slide.fadeOut();
            $slide.eq(index).fadeIn();
        }

        // Кнопка "следующий"
        $slider.find('.next').on('click', function() {
            currentIndex = (currentIndex + 1) % slideCount;
            goToSlide(currentIndex);
        });

        // Кнопка "предыдущий"
        $slider.find('.prev').on('click', function() {
            currentIndex = (currentIndex - 1 + slideCount) % slideCount;
            goToSlide(currentIndex);
        });

        // Автопереключение слайдов (по желанию)
        setInterval(function() {
            currentIndex = (currentIndex + 1) % slideCount;
            goToSlide(currentIndex);
        }, 5000); // 5000 мс = 5 секунд
    });
});
