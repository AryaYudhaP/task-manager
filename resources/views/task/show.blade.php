@extends('layout')

@section('content')

<div class="d-flex">
    <h4>List Task</h4>
    <div class="ms-auto">
        <a class="btn btn-primary" href="{{ route('task.add') }}">Tambah</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>Title</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Date</th>
        <th>User_id</th>
        <th>Menu</th>
    </tr>
    @foreach($task as $data)
    <tr>
        <td>{{ $data->Title }}</td>
        <td>{{ $data->Deskripsi }}</td>
        <td>{{ $data->Status }}</td>
        <td>{{ $data->Date }}</td>
        <td>{{ $data->User_id }}</td>
        <td>
            <a href="{{ route('task.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('task.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection