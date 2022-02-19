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

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title text-center text-success"> <i class="fas fa-sticky-note text-primary"></i> EDIT A TASK</h5>
                    <form action="{{url('update-task/'.$editTask->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                        <label for="task" class="font-weight-bold">TASK NAME:</label>
                        <input type="text" name="task" class="form-control" id="task" aria-describedby="emailHelp" value="{{$editTask->task}}">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="duration" class="font-weight-bold">DURATION:</label>
                        <input type="text" name="duration" class="form-control" id="duration" aria-describedby="emailHelp" value="{{$editTask->duration}}">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="time" class="font-weight-bold">TIME:</label>
                        <input type="text" name="time" class="form-control" id="time" aria-describedby="emailHelp" value="{{$editTask->time}}">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="date" class="font-weight-bold">DATE:</label>
                        <input type="text" name="date" class="form-control" id="date" aria-describedby="emailHelp" value="{{$editTask->date}}">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="remark" class="font-weight-bold">REMARK:</label>
                        <input type="text" name="remark" class="form-control" id="remark" aria-describedby="emailHelp" value="{{$editTask->remark}}">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="status" class="font-weight-bold">STATUS:</label>
                        <select name="status" id="status" class="form-control">
                        <option disabled="" selected="" value="">CHOOSE STATUS</option>
                        <option <?php if($editTask->status=='open') echo 'selected'?> value="open">OPEN</option>
                        <option <?php if($editTask->status=='progress') echo 'selected' ?> value="progress">IN PROGRESS</option>
                        <option <?php if($editTask->status=='abandoned') echo 'selected' ?> value="abandoned">ABANDON</option>
                        <option <?php if($editTask->status=='suspended') echo 'selected' ?> value="suspended">SUSPENDED</option>
                        <option <?php if($editTask->status=='completed') echo 'selected' ?> value="completed">COMPLETED</option>
                        </select>
                        </div>
                        </div>
                        <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block rounded-0"><i class="fas fa-save mr-2"></i>UPDATE TASK</button>
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
