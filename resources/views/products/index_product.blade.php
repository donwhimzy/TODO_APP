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
    <!-- .container>.row>.col-12>.card>h5.card-title+.card-body>table.table>tr*2>th*7 -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-title"></h5>
                    <a href="{{url('/creater')}}" class="text-right btn btn-primary mr-3"><i class="fas fa-plus-circle mr-2"></i> ADD PRODUCTS</a>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>S/N</th>
                                <th>PRODUCT NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>DESCRIPTION</th>
                                <th>PRODUCT CODE</th>
                                <th>DISCOUNT</th>
                                <th>COLOUR</th>
                                <th>ACTIONS</th>
                            </tr>
                            @foreach($allProduct as $key =>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->product_name}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->quantity}}</td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->product_code}}</td>
                                <td>{{$row->discount}}</td>
                                <td>{{$row->colour}}</td>
                                <td>
                                    <a href="{{url('/edit/'.$row->product_code)}}" class="btn btn-primary btn-sm" title="edit"><i class="fas fa-edit"></i> EDIT</a>
                                    <a href="{{url('/delete/'.$row->product_code)}}" class="btn btn-danger btn-sm" title="delete"> <i class="fas fa-trash"></i> DELETE</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>








































































    <script src="{{asset('custon/js/jquery.js')}}"></script>
    <script src="{{asset('custon/js/bootsrap.bundle.min.js')}}"></script>
</body>
</html>
