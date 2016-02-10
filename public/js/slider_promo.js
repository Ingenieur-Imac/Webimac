// function moveRightRecursive(number){
//     var current = $('.inner-promo:eq(0)');
//     current.animate({
//         marginLeft: "-100%"
//     },500,function(){
//         var next = $('.inner-promo:eq(1)');
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
//     var current = $('.inner-promo:eq(0)');
//     var last = $('.inner-promo:eq('+($('.inner-promo').length - 1)+')');
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
//     var isInActivity = false;
//     // $('.inner-promo:eq(0)').css('zIndex',10);
//     $('.promo-arrow-right').click(function(){
//         if(!isInActivity){
//             isInActivity = true;
//             var current = $('.inner-promo:eq(0)');
//             current.animate({
//                 marginLeft: "-100%"
//             },1000,function(){
//                 var next = $('.inner-promo:eq(1)');
//                 current.parent().append(current);
//                 current.css('marginLeft',0);
//                 isInActivity = false;
//             });
//         }
//     });
//
//     $('.promo-arrow-left').click(function(){
//         if(!isInActivity){
//             isInActivity = true;
//             var current = $('.inner-promo:eq(0)');
//             var last = $('.inner-promo:eq('+($('.inner-promo').length - 1)+')');
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
//         var actual_year = $('.inner-promo:eq(0) .ctn-img-promo img').attr('alt');
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
    $('.select-year select').on('change',function(){
        var actual_year = $('.inner-promo:eq(0) .ctn-img-promo img').attr('alt');
        var needed_year = $(this).val();
        var needed_deplacement = actual_year - needed_year;
        if(needed_deplacement < 0){
            
        }
    });
})
