<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>i know how to pass parameters by</h1><br><br>
    <?php
    $name="sammy"
    ?>

    <a href="{{url('/practice_1/'.$name)}}">SUBMIT</a>
</body>
</html>
