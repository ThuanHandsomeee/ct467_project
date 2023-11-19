(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('bg-primary shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('bg-primary shadow-sm').css('top', '-150px');
        }
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top-btn').fadeIn('slow');
        } else {
            $('#back-to-top-btn').fadeOut('slow');
        }
    });

    $('#back-to-top-btn').click(function () {
        $('html, body').scrollTop(0);
        return false;
    });




})(jQuery);

