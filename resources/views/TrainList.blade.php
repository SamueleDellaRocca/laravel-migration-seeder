<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <h1>Questi sono i treni</h1>
    <ol>   
        @foreach ($treni as $treno)
            <li>
                {{ $treno->stazione_di_partenza }} ---> {{ $treno->stazione_di_arrivo }}, il giorno {{ $treno->data_di_partenza }}, orario di partenza {{ $treno->orario_di_partenza }}, orario di arrivo {{ $treno->orario_di_arrivo }}
            </li>
        @endforeach
    </ol>
</body>
</html>


