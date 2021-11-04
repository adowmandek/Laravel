<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

// use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
}



 namespace App;
 use Illuminate\Database\Eloquent\Model;
 class Task extends Model
 {
     //
     protected $fillable = ['title','completed'];
 }









use Illuminate\Http\Request;
use App\Events\TaskCreated;
use App\Events\TaskRemoved;
use App\Task;
class TaskController extends Controller
{
    //
    public function fetchAll(){
        $tasks = Task::all();
        //return response()-&gt;json($tasks);
        return $tasks;
    }

    public function store(Request $request){
        $task = Task::create($request-gtAll());
        broadcast(new TaskCreated($task));
        return response()-gt;json("added");
    }

    public function delete($id){
        $task = Task::find($id);
        broadcast(new TaskRemoved($task));
        Task::destroy($id);
        return response()-gt;json("deleted");
    }
}
