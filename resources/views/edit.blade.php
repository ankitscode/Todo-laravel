@extends('main')
@push('head')
<title>todo using laravel</title>
@endpush
@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2"> Update Todos</div>
        <a href="{{route("create.todo")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <!-- {{ print_r($errors->all())}} -->

    <form action="{{route("update.todo", $todo->id)}}" method="POST">
        @csrf
        <div class="py-3">
            <label for="" class="from-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$todo->name}}">
            <div class="py-3">
                <label for="" class="form-label">Work</label>
                <input type="text" name="work" class="form-control" value="{{$todo->work}}">
            </div>
            <div class="py-3">
                <label for="" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{$todo->date}}">
            </div>
            <input type="number" name='id' class="form-control" value="{{$todo->id}}" hidden>
            <button type="submit" class="btn btn-primary mb-2">Update</button>
    </form>

</div>
@endsection