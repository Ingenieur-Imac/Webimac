$(document).ready(function(){
    $("#search").on("keyup",function(e){
        if($(this).val() == ""){
            $("h3 a").css('display','block');
        }
        if(e.keyCode >= 65 && e.keyCode <= 90){
            var needle = $(this).val().toLowerCase();
            $("h3 a").each(function(){
                if($(this).html().toLowerCase().indexOf(needle) == -1){
                    $(this).css('display','none');
                } else {
                    $(this).css('display','block');
                }
            });
        }
    });

    $("#select-promo").on("change",function(){
        if($(this).val() == 0){
            $("h3 a").css('display','block');
        } else {
            var needle = $(this).val();
            $("h3 a").each(function(){
                if($(this).attr('rel') != needle){
                    $(this).css('display','none');
                } else {
                    $(this).css('display','block');
                }
            });
        }
        checkForInput($("#search").val().toLowerCase());
    });
});

function checkForInput(needle){
    $("h3 a").each(function(){
        if($(this).html().toLowerCase().indexOf(needle) == -1){
            $(this).css('display','none');
        }
    });
}
