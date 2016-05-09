<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            Formulaire de contact déposé par : {{$datas->name}}
        </p>
        <p>
            Objet : {{$datas->subject}}
        </p>
        <p>
            Message : {{$datas->message}}
        </p>
        <p>
            Contactez : {{$datas->email}}
        </p>
    </body>
</html>
