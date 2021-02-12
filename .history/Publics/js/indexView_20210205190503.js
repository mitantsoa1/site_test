(function($) {

    $('.header__icon').clik(function(e) {
        alert("oj");
        e.preventDefault();
        $('body').toggleClass('with_sidebar');
    })

})(jQuery);