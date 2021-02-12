(function($) {

    $('.header__iconA').on('click', function(e) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })

})(jQuery);