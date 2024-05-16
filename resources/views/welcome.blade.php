@extends('main')
@push('head')
<title>todo using laravel</title>
@endpush
@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2">Todos</div>
        <a href="{{route("create.todo")}}" class="btn btn-primary btn-lg">Add</a>
    </div>
    <table class="table table-stripped table-dark table-hover">
        <thead>
            <tr>
                <th>NAME</th>
                <th>WORK</th>
                <th>DATE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
            <tr valign="middle">
                <td style=width:20%>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->date}}</td>
                <td style=width:20%>
                    <a href="{{route("edit.todo", $todo->id)}}" class="btn btn-info">EDIT</a>
                    <a href="{{ route("submit.delete", $todo->id) }}" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection