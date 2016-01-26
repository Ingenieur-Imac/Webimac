$(document).ready(function(){
    var isInActivity = false;
    $('.testi-arrow-right').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.ctn-testimonial:eq(0)');
            current.animate({
                marginLeft: "-920px"
            },1000,function(){
                var next = $('.ctn-testimonial:eq(1)');
                current.parent().append(current);
                current.css('marginLeft',0);
                isInActivity = false;
            });
        }
    });

    $('.testi-arrow-left').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.ctn-testimonial:eq(0)');
            var last = $('.ctn-testimonial:eq('+($('.ctn-testimonial').length - 1)+')');
            last.parent().prepend(last);
            last.css('marginLeft','-920px');
            last.animate({
                marginLeft:"0"
            },1000,function(){
                isInActivity = false;
            });
        }
    })
});
