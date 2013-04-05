function confirmDialog() {
    var conf = confirm("Подтвердите удаление! При этом атрибут удалится у всех продуктов, использующих его.");
    if(conf==false){
        return false;
    }
    else {
        return true
    }
}



$(".deleteAttr").click(function(){

        var id = $(this).attr('id').substr(1);


    var conf = confirmDialog();

    if (conf != false){
        $(this).parent().parent().parent().remove();


        $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '/shopcategories/deleteattribute',
                    data: {
                            'id':id,
                    },

                    beforeSend: function(){
                        $("#attrTable").addClass("loading");
                    },


                    success: function(){
                        ;
                    },



                    complete: function(){

                        $("#attrTable").removeClass("loading");


                    }

                 });

    }
});