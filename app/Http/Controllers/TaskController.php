<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $tasks=Task::simplePaginate(3);
            //  dd($tasks);

            return view('index')->with('tasks',$tasks);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        request()->validate([
            'task' => 'required',
            'assign_to' => 'required',
            'assign_by' => 'required',
            
        ]);
        //store data
        $data=Task::create([
          'task'=>$request->task,
          'assign_to'=>$request->assign_to,
          'assign_by'=>$request->assign_by,
          'status'=>$request->status,
        ]);
        // dd($data);
        $data->save();
        //set with message
        $message = 'Task has been created successfully';
        return redirect()->route('index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $task=Task::find($id);
        return view('show',['task' => $task ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $request->validate([
            'task' => 'required',
            'assign_to' => 'required',
            'assign_by' => 'required',
            'status' => 'required',
            
        ]);

        //Authorization(on hold...)
        //perssist
         $data=Task::findOrFail($id);
         $data->update([
            'task' => $request->task,
            'assign_to' => $request->assign_to,
            'assign_by' => $request->assign_by,
            'status' => $request->status,
         ]);
        

         return redirect()->route('index')->with('message','data has been updated');


        //redirect

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       
        // dd($id);
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('index')->with('message', 'Task has been deleted successfully');
    }
}
