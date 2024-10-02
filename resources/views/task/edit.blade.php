@extends('layout')

@section('content')

<h4>Edit Task</h4>

<form action="{{ route('task.update', $task->id) }}" method="post">
    @csrf
    <label>Nama Task</label>
    <input type="text" name="Title" value="{{ $task->Title }}" class="form-control mb-2">
    <label>Deskripsi</label>
    <input type="text" name="Deskripsi" value="{{ $task->Deskripsi }}" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="Status" value="{{ $task->Status }}" class="form-control mb-2">
    <label>Date</label>
    <input type="date" name="Date" value="{{ $task->Date }}" class="form-control mb-2">
    <label>User Id</label>
    <input type="text" name="User_id" value="{{ $task->User_id }}" class="form-control mb-2">


    <button class="btn btn-primary">Edit</button>
</form>

@endsection