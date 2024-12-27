jQuery(document).ready(function($) {
    // Открыть модальное окно
    $('body').on('click', '.open-modal', function() {
        var modalId = $(this).data('modal-id'); // Получаем ID модального окна
        $('#' + modalId).addClass('open');
    });

    // Закрыть модальное окно
    $('body').on('click', '.modal-window', function(e) {
        if ($(e.target).is('.modal-window')) {
            $(this).removeClass('open');
        }
    });
});
