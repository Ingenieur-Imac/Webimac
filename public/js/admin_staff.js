$(document).ready(function(){
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    $(function() {
        $( "#ctn-staffs-main").sortable({
            revert: true
        });
        $( "#ctn-staffs-main, h3 a" ).disableSelection();
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
    $("#ctn-staffs-main h3").each(function(key){
        data.push([$(this).attr('rel'),key]);
    });
    console.log(data);
    $.ajax({
        method: "GET",
        url: "/admin/orderStaffs/" + JSON.stringify(data)
    }).success(function(){
        $('#result').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sauvegardé avec succès!</strong></div>');
    });
}
