(function($) {

    $('.header__iconA').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })
    $('.site-cache').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('with_sidebar');
    })
    $('#monCarousel img').css({ "height": $('#monCarousel img').height - "530px" })

})(jQuery);