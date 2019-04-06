$ = jQuery;

$(document).ready(
    function () {

        //animate the nav menu
        var exit = $('#exit-btn');
        var menu = $('#menu-items');
        var hamburger = $('#woof-menu-hamburger');

        $('#woof-menu-hamburger').click(
            function () {
                $(this).addClass('scale');
                exit.show(1000);
                menu.show(1000);
            }
        );

        exit.click(
            function () {
                exit.hide(1000);
                menu.hide(1000);
                hamburger.removeClass('scale');

            }
        );

    }
);
