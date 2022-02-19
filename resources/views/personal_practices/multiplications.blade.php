<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('custom/css/fontawesome-free/css/all.css')}}">
</head>
<body>

    <form action="" method="post">
        <div>
            <label for="">NUM 1</label>
            <input type="number" name="num_one">
            <label for="">NUM 2</label>
            <input type="number" name="num_two"><br><br>
            <button>GENERATE</button><br><br>

            {{$name}}
            {{$state}}

            <p>my name is <b>{{$name}}</b> and i am from <b>{{$state}}</b>.</p>

        </div>
    </form>







<script src="{{asset('custon/js/jquery.js')}}"></script>
<script src="{{asset('custon/js/bootsrap.bundle.min.js')}}"></script>
</body>
</html>
