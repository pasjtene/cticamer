//code jquerry pour pusser la page vers le haut en cliquant sur la fleche montante
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 40) {
            $('#toTopBtn').fadeIn();
        } else {
            $('#toTopBtn').fadeOut();
        }
    });

    $('#toTopBtn').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});