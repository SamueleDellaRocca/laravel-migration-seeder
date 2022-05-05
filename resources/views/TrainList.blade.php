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
    <h1>Questi sono i treni che partono oggi, ovvero il 2022-07-05</h1>
        @foreach ($treni as $treno)
        <div>
            <p>
                {{ $treno->stazione_di_partenza }} ---> {{ $treno->stazione_di_arrivo }}, il giorno {{ $treno->data_di_partenza }}
            </p>
        </div>
        @endforeach
</body>
</html>


