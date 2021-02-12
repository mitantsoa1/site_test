(function($) {

    $('.header__iconA').on('click', function() {
        alert("oj");
        // e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })

})(jQuery);