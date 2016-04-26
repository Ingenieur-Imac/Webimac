function upload_image(input,target){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(target).attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function upload_multiple_image(input,target){
    if (input.files && input.files[0]) {
        for (var i = 0, f; f = input.files[i]; i++){
            var reader = new FileReader();

            reader.onload = (function(thefile){
                return function(e){
                    $(target).append("<img class='url_photo_student' title='"+thefile.name+"' src='"+e.target.result+"'/>");
                };
            })(f);

            reader.readAsDataURL(f);
        }
    }
}

function deletePic(idPic,element){
    $.get("/admin/DestroyPicTestimonial/"+idPic);
    $(element).parent().remove();
}

$(document).ready(function(){
    $('#url_image').change(function(){
        upload_image(this,'#url_photo_student');
    });

    $('#url_gallery').change(function(){
        upload_multiple_image(this,'#url_photo_gallery');
    })
})
