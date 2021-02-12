(function($) {

    $('.header__iconA').clik(function() {
        alert("oj");
        // e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })

})(jQuery);