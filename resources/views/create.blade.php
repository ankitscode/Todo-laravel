@extends('main')
@push('head')
<title>todo using laravel</title>
@endpush
@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2"> Add Todos</div>
        <a href="{{route("home.todo")}}" class="btn btn-primary btn-lg">Back</a>
    </div>

    <form action="{{route("submit.store")}}""  method=" post">
        @csrf
        <div class="py-3">
            <label for="" class="from-label">Name</label>
            <input type="text" class="form-control" name="name">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="py-3">
            <label for="" class="form-label">Work</label>
            <input type="text" class="form-control" name="work">
            <span class="text-danger">
                @error('work')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="py-3">
            <label for="" class="form-label">Date</label>
            <input type="date" class="form-control" name="date">
            <span class="text-danger">
                @error('date')
                {{$message}}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Add</button>
    </form>
</div>



@endsection