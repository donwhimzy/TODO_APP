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

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-title"><h5 class="text-center mt-3 text-primary">ADD PRODUCT</h5></div>
                <div class="card-body">
                    <form action="{{url('/store')}}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="prod_name">Product Name:</label>
                                <input type="text" id="prod_name" placeholder="Enter Product Name" name="prod_name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Price:</label>
                                <input type="text" id="prod_price" placeholder="Enter Price" name="prod_price" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Discount:</label>
                                <input type="text" id="prod_dicount" placeholder="Enter Discount" name="prod_discount" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Quantity:</label>
                                <input type="text" id="prod_quantity" placeholder="Enter Quantity" name="prod_quantity" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="">Colour:</label>
                                <input type="text" id="prod_colour" placeholder="Enter Colour" name="prod_colour" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="prod_name">Description:</label>
                                <textarea id="prod_description" placeholder="Enter description" name="prod_description" class="form-control mb-3" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary btn-block"><i class="fas fa-save mr-3"></i>ADD PRODUCT</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

























































    <script src="{{asset('custon/js/jquery.js')}}"></script>
    <script src="{{asset('custon/js/bootsrap.bundle.min.js')}}"></script>
</body>
</html>
