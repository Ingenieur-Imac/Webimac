$(document).ready(function(){
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    $(function() {
        $( "#ctn-partnerships").sortable({
            revert: true
        });
        $( "#ctn-partnerships, h3 a" ).disableSelection();
    });

    $("#save").click(function(){
        updateOrderPartnerships();
    })
});

// TODO
//Ce n'est pas parce que ça marche, que c'est bien !
//Toi qui ligne, trouve une meilleure solution s'il te plait !
//Je t'offrirai une bière (julien.rousset01@gmail.com)
//Le controller qui reçoit ces données est AdminPartnershipController@order
//Bisous...

function updateOrderPartnerships(){
    var data = [];
    $("#ctn-partnerships h3").each(function(key){
        data.push([$(this).attr('rel'),key]);
    });
    console.log(data);
    $.ajax({
        method: "GET",
        url: "/admin/orderPartnership/" + JSON.stringify(data)
    }).success(function(){
        console.log("Sauvegardé");
    });
}
