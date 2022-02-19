<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>i am a loop</h1>
    <h1>{{$loop[9]}} is the last digit</h1>
    <h2>i am the whole loop</h2>
    {{$loop[0]}}

    @foreach($loop as $i=>$micheal)
    <span>{{$i}}=>{{$micheal}}</span>
    @endforeach

</body>
</html>
