<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            Proposition de stage déposé par : {{$datas->name}}
        </p>
        <p>
            Pour le poste de : {{$datas->position}}
        </p>
        <p>
            Dates et lieux : {{$datas->place}}
        </p>
        <p>
            Description : {{$datas->task}}
        </p>
        <p>
            Informations complémentaires : {{$datas->message}}
        </p>
        <p>
            Contactez : {{$datas->email}}
        </p>
    </body>
</html>
