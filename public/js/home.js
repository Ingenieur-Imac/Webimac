$(document).ready(function(){
    var isInActivity = false;
    var nbSlides = $('.testimonial li').length;
    var neededMargin = -100/nbSlides*(nbSlides-1)+'%';
    var margin = {marginLeft: neededMargin};
    $('.slider-arrow-right').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.testimonial li:eq(0)');
            current.animate(margin,1000,function(){
                var next = $('.ctn-testimonial:eq(1)');
                current.parent().append(current);
                current.css('marginLeft',0);
                isInActivity = false;
            });
        }
    });

    $('.slider-arrow-left').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.testimonial li:eq(0)');
            var last = $('.testimonial li:eq('+($('.testimonial li').length - 1)+')');
            last.parent().prepend(last);
            last.css('marginLeft',neededMargin);
            last.animate({
                marginLeft:"0"
            },1000,function(){
                isInActivity = false;
            });
        }
    })
});
