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
    var Hscreen = screen.height;
    alert(Hscreen);

})(jQuery);