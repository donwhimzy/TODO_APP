<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <label for="">NAME:</label>
    <input type="text" name="firstname" placeholder="name"><br><br>
    <label for="">EMAIL:</label>
    <input type="text" name="email" placeholder="email"><br><br>



    <button>SUBMIT</button>
    </form>

    <h1>the {{$name}} time tableup to {{$email}} is:</h1><br>
    @foreach($multi as $row)
        <span>{{$row}}</span><br>
     @endforeach
</body>
</html>
