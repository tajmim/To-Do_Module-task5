<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{

    public function index(){
        $tasks = task::all();
        return view('welcome',compact('tasks'));
    }

    public function add_task(Request $request){
        $task = new Task();
        $task->task_name = $request->name;
        $task->task_desc = $request->desc;
        $task->save();
        return redirect()->back();
    }

    // public function edit_task(Request $request,$id){
    //     $task = task::find($id);
    //     $task->name = $request->name;
    //     $task->desc = $request->desc;
    //     $task->save();
    //     return redirect()->back();

    // }

    public function delete_task($id){
        $task = task::find($id);
        $task->delete();
        return redirect()->back();
    }

}
