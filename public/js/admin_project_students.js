$(document).ready(function(){
    $('#findStudents').on('keyup',function(){
        searchStudent($(this).val());
    });

    $('.student').click(function(){
        var idStudent = $(this).attr('rel');
        var idProject = $("#studentResults").attr('rel');
        removeStudent(idStudent,idProject);
        $(this).remove();
    });
});


function searchStudent(s){
    s = s.toLowerCase();
    if(s != ""){
        $.get("/admin/findStudents/"+s,function(result){
            $('#studentResults').html("");
            result  = JSON.parse(result);
            for(var i in result){
                $('#studentResults').append("<a href='#' rel='" + result[i]["id"] + "'class='list-group-item pointer'>" + result[i]["name"] + " " + result[i]["surname"] + " " + result[i]["year"] + "</a>");
            }

            $('#studentResults a').click(function(e){
                e.preventDefault();
                $('#findStudents').val("");
                $('#studentResults').html("");
                addStudent($(this).attr('rel'),$("#studentResults").attr('rel'),$(this).html());
            });
        });
    } else {
        $('#studentResults').html("");
    }
}

function addStudent(idStudent,idProject,name){
    $('.students.jumbotron').append('<button type="button" rel="' + idStudent + '" class="student btn btn-primary"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>' + name + '</button>')
    $.get("/admin/AddStudentToProject/"+idStudent+"/"+idProject);
}

function removeStudent(idStudent, idProject){
    console.log('Launching removing');
    $.get("/admin/RemoveStudentFromProject/"+idStudent+"/"+idProject);
}
