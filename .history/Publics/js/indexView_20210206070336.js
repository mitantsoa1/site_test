(function($) {

    $('.header__iconA').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })
    $('.site-cache').on('click', function(e) {
        e.preventDefault();
        $('body').removeClass('with_sidebar');
    })
    var Lscreen = screen.width;
    console.log(Lscreen);
    var Hascreen = screen.availHeight;
    // $('#monCarousel img').height = Hascreen - "500";
    $('#monCarousel img').css({ "height": "100vw", "width": "100%", "maxHeight": "500px" });




})(jQuery);