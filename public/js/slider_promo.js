// function moveRightRecursive(number){
//     var current = $('.slide:eq(0)');
//     current.animate({
//         marginLeft: "-100%"
//     },500,function(){
//         var next = $('.slide:eq(1)');
//         current.parent().append(current);
//         current.css('marginLeft',0);
//     });
//     number--;
//     if(number > 0){
//         console.log('launching another move');
//         setTimeout(function(number){
//             moveRightRecursive(number);
//         },600);
//     }
// }
//
// function moveLeftRecursive(number){
//     var current = $('.slide:eq(0)');
//     var last = $('.slide:eq('+($('.slide').length - 1)+')');
//     last.parent().prepend(last);
//     last.css('marginLeft','-100%');
//     last.animate({
//         marginLeft:"0"
//     },500);
//
//     number--;
//     if(number > 0){
//         console.log('launching another move');
//         setTimeout(function(number){
//             moveLeftRecursive(number);
//         },600);
//     }
// }
//
//
// $(document).ready(function(){
//     $('.select-year select').val($('.slide:eq(0) img').attr('alt'));
//     var isInActivity = false;
//     // $('.inner-promo:eq(0)').css('zIndex',10);
//     $('.arrow-right').click(function(){
//         if(!isInActivity){
//             isInActivity = true;
//             var current = $('.slide:eq(0)');
//             current.animate({
//                 marginLeft: "-100%"
//             },1000,function(){
//                 var next = $('.slide:eq(1)');
//                 current.parent().append(current);
//                 current.css('marginLeft', 0);
//                 isInActivity = false;
//             });
//         }
//     });
//
//     $('.arrow-left').click(function(){
//         if(!isInActivity){
//             isInActivity = true;
//             var current = $('.slide:eq(0)');
//             var last = $('.slide:eq('+($('.slide').length - 1)+')');
//             last.parent().prepend(last);
//             last.css('marginLeft','-100%');
//             last.animate({
//                 marginLeft:"0"
//             },1000,function(){
//                 isInActivity = false;
//             });
//         }
//     });
//
//     $('.select-year select').on('change',function(){
//         var actual_year = $('.slide:eq(0) img').attr('alt');
//         var needed_year = $(this).val();
//         var needed_deplacement = actual_year - needed_year;
//         if(!isInActivity && needed_deplacement > 0){
//             moveRightRecursive(needed_deplacement);
//         } else if(!isInActivity && needed_deplacement < 0){
//             moveLeftRecursive(-needed_deplacement);
//         }
//     });
// });

$(document).ready(function(){
    var isInActivity = false;
    var nbSlides = $('.slide').length;
    var numericMargin = -100/nbSlides*(nbSlides-1);
    var neededMargin = -100/nbSlides*(nbSlides-1)+'%';
    var margin = {marginLeft: neededMargin};
    $('.arrow-right').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.slide:eq(0)');
            var year = $('.slide:eq(1)').attr('rel');
            $('.select-year select').val(year);
            current.animate(margin,1000,function(){
                var next = $('.slide:eq(1)');
                current.parent().append(current);
                current.css('marginLeft',0);
                isInActivity = false;
            });
        }
    });

    $('.arrow-left').click(function(){
        if(!isInActivity){
            isInActivity = true;
            var current = $('.slide:eq(0)');
            var last = $('.slide:eq('+($('.slide').length - 1)+')');
            last.parent().prepend(last);
            last.css('marginLeft',neededMargin);
            var year = $('.slide:eq(0)').attr('rel');
            $('.select-year select').val(year);
            last.animate({
                marginLeft:"0"
            },1000,function(){
                isInActivity = false;
            });
        }
    });

    $('.select-year select').on('change',function(){
        if(!isInActivity){
            isInActivity = true;
            var target = $(".slide[rel='"+$(this).val()+"']");
            var pos_of_target = target.index();
            if(pos_of_target < nbSlides/2){
                //On va à droite
                var current = $('.slide:eq(0)');
                for($i = 0; $i < pos_of_target; $i++){
                    var next = $('.slide:eq(1)');
                    current.parent().append(current);
                    current = $('.slide:eq(0)');
                }
                isInActivity = false;
            } else {
                //On va à gauche
                var last = null;
                for(var i = 0; i < (nbSlides - pos_of_target); i++){
                    var current = $('.slide:eq(0)');
                    last = $('.slide:eq('+($('.slide').length - 1)+')');
                    last.parent().prepend(last);
                }
                isInActivity = false;
            }
        }
    });
});


// $(document).ready(function(){
//     $('.select-year select').on('change',function(){
//         var actual_year = $('.slide:eq(0) .slide img').attr('alt');
//         var needed_year = $(this).val();
//         var needed_deplacement = actual_year - needed_year;
//         if(needed_deplacement < 0){
//
//         }
//     });
// })
