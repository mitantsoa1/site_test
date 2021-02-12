(function($) {

    $('.header__iconA').on('click', function() {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
        alert('ici')
    })

})(jQuery);