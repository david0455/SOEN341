$ = jQuery;

$(document).ready(
    function () {


        /////////////////////////////////////////////////////////
        // AJAX calls to update user meta and change btns that
        // are displayed
        /////////////////////////////////////////////////////////
        $('.like').click(
            function () {
                var btn = $(this);
                var data = {
                    action : "woof_ajax_like",
                    postid: btn.data('postid')
                };
                $.ajax(
                    {
                        url : my_ajax_object.ajax_url,
                        data : data,
                        success : function (response) {
                            btn.hide();
                            btn.next().show();
                        }
                    }
                );

            }
        );

        $('.unlike').click(
            function () {
                var btn = $(this);
                var counter = $('#like-counter');
                var data = {
                    action : "woof_ajax_unlike",
                    postid: btn.data('postid')
                };
                $.ajax(
                    {
                        url : my_ajax_object.ajax_url,
                        data : data,
                        success : function (response) {
                            btn.hide();
                            btn.prev().show();
                        }
                    }
                );

            }
        );

    }
);
