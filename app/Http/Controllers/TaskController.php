<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function index()
{
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
}
    
    public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $request->validate([
    'title' => 'required',
    'description' => 'required'
]);
    \App\Models\Task::create([
        'title' => $request->title,
        'description' => $request->description
        
    ]);

   return redirect('/tasks')->with('success', 'Task added successfully!');
}

    
    public function show(Task $task)
    {
        //
    }

    
   public function edit($id)
{
    $task = Task::find($id);
    return view('tasks.edit', compact('task'));
}

    
    public function update(Request $request, $id)
{
    $request->validate([
    'title' => 'required',
    'description' => 'required'
]);
    $task = Task::find($id);

    $task->update([
        'title' => $request->title,
        'description' => $request->description
       
    ]);

    return redirect('/tasks');
}

    
   public function destroy($id)
{
    Task::find($id)->delete();

    return redirect('/tasks'); 
}
}
