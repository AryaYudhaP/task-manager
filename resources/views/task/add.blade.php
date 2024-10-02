@extends('layout')

@section('content')

<h4>Tambah Task</h4>

<form action="{{ route('task.submit') }}" method="post">
    @csrf
    <label>Nama Task</label>
    <input type="text" name="Title" class="form-control mb-2">
    <label>Deskripsi</label>
    <input type="text" name="Deskripsi" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="Status" class="form-control mb-2">
    <label>Date</label>
    <input type="date" name="Date" class="form-control mb-2">
    <label>User Id</label>
    <input type="text" name="User_id" class="form-control mb-2">


    <button class="btn btn-primary">Tambah</button>
</form>

@endsection