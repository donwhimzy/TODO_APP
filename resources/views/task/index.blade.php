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
        <div class="container-fluid">
            <div class="row justify-content-center py-5">
                <div class="col-10">
                    <div class="card">
                    <div class="card-title text-center pt-3 pr-2">
                    <b> ALL TASK</b>
                    <span class="float-right mb-2"><a href="{{route('create.task')}}" class="btn btn-primary"><i class="fas fa-edit"></i> ADD A TASK</a></span>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Time</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Date</th>
                                <th scope="col">Remark</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($allTask as $index=>$row)
                                <tr>
                                <td>{{$index++ +1}}.</td>
                                <td>{{$row->task}}</td>
                                <td>{{$row->time}}</td>
                                <td>{{$row->duration}}</td>
                                <td>{{$row->date}}</td>
                                @if($row->remark ==NULL)
                                  <td>NO COMMENT</td>
                                @else
                                  <td>{{$row->remark}}</td>
                                @endif

                                @if($row->status ==NULL)
                                  <td>
                                  <span class="badge badge-warning p-2">pending</span>
                                  </td>
                                @elseif($row->status=="open")
                                <td>
                                <span class="badge badge-primary p-2">{{$row->status}}</span>
                                </td>

                                @elseif($row->status=="progress")
                                <td>
                                <span class="badge p-2" style="background-color:aqua">{{$row->status}}</span>
                                </td>

                                @elseif($row->status=="abandoned")
                                <td>
                                <span class="badge badge-danger p-2">{{$row->status}}</span>
                                </td>

                                @elseif($row->status=="suspended")
                                <td>
                                <span class="badge badge-secondary p-2">{{$row->status}}</span>
                                </td>

                                @elseif($row->status=="completed")
                                <td>
                                <span class="badge badge-success p-2">{{$row->status}}</span>
                                </td>

                                @endif

                                <td>
                                <a class="btn btn-primary btn-sm" href="{{url('edit-task/'.$row->id)}}"><i class="fas fa-edit mr-1"></i> EDIT</a>
                                <a class="btn btn-danger btn-sm" href="{{url('delete-task/'.$row->id)}}"><i class="fas fa-trash mr-1"></i> DELETE</a>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>







































































<script src="{{asset('custon/js/jquery.js')}}"></script>
<script src="{{asset('custon/js/bootsrap.bundle.min.js')}}"></script>
</body>
</html>
