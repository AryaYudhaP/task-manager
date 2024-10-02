<?php


namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function show() {
        $task = Task::get();
        return view('task.show', compact('task'));
    }

    function add() {
        return view('task.add');
    }

    function submit(Request $request) {
        $task = new Task();
        $task->Title = $request->Title;
        $task->Deskripsi = $request->Deskripsi;
        $task->Status = $request->Status;
        $task->Date = $request->Date;
        $task->User_id = $request->User_id;
        $task->save();

        return redirect()->route('task.show');
    }

    function edit($id) {
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }

    function update(Request $request, $id) {
        $task = Task::find($id);
        $task->Title = $request->Title;
        $task->Deskripsi = $request->Deskripsi;
        $task->Status = $request->Status;
        $task->Date = $request->Date;
        $task->User_id = $request->User_id;
        $task->update();

        return redirect()->route('task.show');
    }

    function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.show');
    }
}
