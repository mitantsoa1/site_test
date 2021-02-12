(function($) {
    $('.header__iconA').clik(function(e)) {
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    }
})(jQuery);