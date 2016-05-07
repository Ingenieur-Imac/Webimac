$(document).ready(function(){
    $("input[name='filter']").on("change",function(){
        updateDisplayOfProject();
    });
    $(".project-main-filters").on("change",function(){
        updateDisplayOfProject();
    });

    $("span.main-filter").click(function(){
        if(!$(this).hasClass("main-selected-filter"))
            $("span.main-filter").toggleClass("main-selected-filter");
            updateDisplayOfProject();
    });
});

function updateDisplayOfProject(){
    var tags = [];
    var yearvalue = $(".project-main-filters select").val();
    var year = "";
    var heart = ($(".main-selected-filter").attr("rel") == "heart") ? true : false;

    //Displaying All Project
    $('.project').css("display","block");

    //Get year
    $(".project-main-filters select option").each(function(){
        if($(this).attr("value") == yearvalue){
            year = $(this).html();
        }
    });

    //Get tags
    $("input[name='filter']:checked").each(function(){
        tags.push($(this).attr("rel"));
    });

    console.log(tags);

    // Remise à Zéro
    if(tags.length == 0 && yearvalue == 0 && !heart){
        $(".project").css("display","block");
        return true;
    }

    $(".project").each(function(key){
        var display = true;

        //Check for Main Filter (All | Heart)
        if(heart){
            display = false;
            $(".project:eq("+key+") .ctn-tags .tag").each(function(){
                if($(this).attr("rel") == 1)
                    display = true;
            });
        }

        //Check for tags
        if(tags.length != 0 && display){
            display = true;
            for (var i in tags) {
                var tmptag = false;
                $(".project:eq("+key+") .ctn-tags .tag").each(function(){
                    if($(this).attr("rel") == tags[i]){
                        tmptag = true;
                    }
                });
                if(!tmptag)
                    display = false;
            }
        }

        //Check for year
        if(yearvalue != 0 && display){
            display = false;
            if($(".project:eq("+key+")").attr("rel") == year){
                display = true;
            }
        }

        if(!display){
            $(this).css("display","none");
        }
    });
}
