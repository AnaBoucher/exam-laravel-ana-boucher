<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
    {
        $task = Task::find($id);
        return view('show', [
            'tasks' => $task,
        ]);
    }
    public function delete($task_id)
    {
        $task = \App\Models\Task::find($task_id);
        if ($task){
            $task->delete();
            $message = 'The task '. $task_id .' was successfully deleted.';    
        } else{
            $message = 'This task doesn\'t exist.';
        }
        
        return view('task-delete',[
            'message' => $message
        ]);
    }
}