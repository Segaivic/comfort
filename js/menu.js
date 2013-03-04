/**
 * Created with JetBrains PhpStorm.
 * User: Sega
 * Date: 18.09.12
 * Time: 10:17
 */
jQuery(function($) {
        $('.up').click(function(){
            var id = $(this).attr('id').substr(2);
                    $.ajax({
                        type: 'post',
                          data: {
                            'id': id
                              },
                        beforeSend: function(){
                            $("#positions").addClass("loading");
                        },
                        complete: function(){
                            $("#positions").removeClass("loading");
                        },
                        success: function($response){
                            $("#positions").html($response);
                        },
                        url: '/admin/menu/moveup'
                    });
        });


        $('.down').click(function(){
            var id = $(this).attr('id').substr(4);
            $.ajax({
                type: 'post',
                data: {
                    'id': id
                },
                beforeSend: function(){
                    $("#positions").addClass("loading");
                },
                complete: function(){
                    $("#positions").removeClass("loading");
                },
                success: function($response){
                    $("#positions").html($response);
                },
                url: '/admin/menu/movedown'
            });

        });

});