$(function () {


    $('#btn-backTop').on('click', function(e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 2000);
    });
});