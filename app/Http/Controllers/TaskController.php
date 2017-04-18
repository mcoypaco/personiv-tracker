<?php

namespace App\Http\Controllers;

use App\Task;
use App\Pause;
use App\Traits\Enlist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    use Enlist;

    /**
     * Create a pause record for task.
     *
     * @return \Illuminate\Http\Response
     */
    public function pause(Request $request, Task $task)
    {
        // Check if the user owns the task
        $this->authorize('update', $task);

        $pause = new Pause;

        $task->pauses()->save($pause);

        $task->load(['pauses' => function($query){
            $query->whereNull('minutes_spent')->orderBy('created_at', 'desc');
        }]);

        return $task;
    }

    /**
     * Mark task as finished.
     *
     * @return \Illuminate\Http\Response
     */
    public function finish(Request $request, Task $task)
    {
        // Check if the user owns the task
        $this->authorize('update', $task);

        $task->ended_at = Carbon::now();

        $task->save();
    }

    /**
     * Display a listing of the resource with parameters.
     *
     * @return \Illuminate\Http\Response
     */
    public function enlist(Request $request)
    {
        $this->model = Task::query();

        $this->populate($request);

        if($request->has('search'))
        {
            $this->model->where('title', 'like', '%'. $request->search .'%');
        }

        if($request->first)
        {
            return $this->model->first();        
        }

        if($request->paginate)
        {
            return $this->model->paginate($request->paginate);
        }

        return $this->model->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $task = new Task;

        $task->title = $request->title;
        $task->account_id = $request->account_id;
        $task->revision = $request->revision;
        $task->number_of_photos = $request->number_of_photos;
        $task->user_id = $request->user()->id;

        $task->save();

        if($task->account_id)
        {
            $task->load('account');
        }

        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // Check if the user owns the task
        $this->authorize('update', $task);

        $this->validate($request, [
            'title' => 'required',
        ]);

        $task->title = $request->title;
        $task->account_id = $request->account_id;
        $task->revision = $request->revision;
        $task->number_of_photos = $request->number_of_photos;

        $task->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        // Check if the user owns the task
        $this->authorize('delete', $task);

        $task->delete();
    }
}
