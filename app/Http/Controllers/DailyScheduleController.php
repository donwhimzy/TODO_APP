<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailySchedule;

class DailyScheduleController extends Controller
{
    public function index(){
        $allTask = DailySchedule::all();
        return view('task.index',compact('allTask'));
    }

    public function create(){
        return view('task.create_task');
    }
    public function store(Request $request){
        // dd($request->duration)
        $date = date_create($request->date);
        $formattedDate = date_format($date,"d-M-Y");

        date_default_timezone_set("Africa/Lagos");
        $taskCreate = new DailySchedule;

        $taskCreate ->task = $request->task;
        $taskCreate ->time = $request->time;
        $taskCreate ->duration = $request->duration;
        $taskCreate ->date =$formattedDate;
        $taskCreate ->remark = $request->remark;
        $taskCreate ->status = $request->status;


        $taskCreate ->save();

        return redirect(route('index'));

    }

    public function edit($id){
        $editTask = DailySchedule::find($id);
        return view('task.edit_task',compact('editTask'));
    }

    public function update(Request $request,$id){
        // dd($id);
        DailySchedule::find($id)->update([
            'task' => $request->task,
            'time' => $request->time,
            'duration' => $request->duration,
            'date' => $request->date,
            'remark' => $request->remark,
            'status' => $request->status,
        ]);
        return redirect(route('index'));
    }

    public function delete($id){
        DailySchedule::find($id)->delete();
        return redirect()->back();
    }
}
