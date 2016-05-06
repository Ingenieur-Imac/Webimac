$(document).ready(function(){
    $("#add-tag").on('change',function(e){
        if($(this).val() == 0)
            return false;

        //Vérification que le tag est pas présent
        for(var i in $(".tag")){
            if($(".tag:eq("+i+")").attr('rel') == $(this).val()){
                return false;
            }
        }
        $(".tags").append('<button type="button" rel="'+$(this).val()+'" class="tag btn btn-primary"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'+$('select option[value="'+$(this).val()+'"]').html()+'</button>');
        var idTag = $("#add-tag").val();
        var idProj = $("#add-tag").attr('rel');
        addTag(idTag,idProj);
    });

    $(".tag").click(function(){
        var idTag = $(this).attr('rel');
        var idProj = $("#add-tag").attr('rel');
        $(this).remove();
        removeTag(idTag,idProj);
    })
});

function addTag(idTag,idProject){
    $.get("/admin/AddTagToProject/"+idTag+"/"+idProject);
}

function removeTag(idTag,idProject){
    $.get("/admin/RemoveTagToProject/"+idTag+"/"+idProject);
}
