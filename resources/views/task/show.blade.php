@extends('layouts.app')

@section('content')

    <h1>{{$task->name}}</h1>

    <p>
        <a href="{{url('home')}}">Back</a> |
    </p>

    <div class="form-group">
        <label for="name">Name</label>
        <p class="form-control-static">{{$task->name}}</p>
    </div>

    <div class="form-group">
        <label for="description" class="control-label">Description</label>
        <p class="form-control-static">{{$task->description}}</p>
    </div>

    <div class="form-group">
        <label for="name">Due to</label>
        <p class="form-control-static">{{$task->due_date}}</p>
    </div>

    <div class="form-group">
        <label for="listId">List</label>
        <p class="form-control-static">{{$task->list->name}}</p>
    </div>

    <a href="{{url('task/' . $task->id . '/edit')}}" class="btn btn-primary">Edit</a>
@stop
