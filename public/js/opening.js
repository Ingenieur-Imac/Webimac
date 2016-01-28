$(document).ready(function(){
    $('.activity-sectors-title').click(function(){
        if(!$(this).hasClass('selected')){
            //Change select on the div clicked
            $('.activity-sectors-title.selected').removeClass('selected');
            $(this).addClass('selected');
            //Change text according to the div clicked
            for(var i in $('.activity-panel')){
                if($('.activity-panel:eq('+i+')').attr('alt') == $(this).attr('alt')){
                    $('.activity-panel.selected').removeClass('selected');
                    $('.activity-panel:eq('+i+')').addClass('selected');
                    break;
                }
            }
        }
    })
})
