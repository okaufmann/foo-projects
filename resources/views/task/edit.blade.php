@extends('layouts.app')

@section('content')

    <h1>Edit {{$task->name}}</h1>

    <form action="{{url('task')}}" method="post" role="form">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="I have to..." value="{{$task->name}}">
        </div>

        <div class="form-group">
            <label for="description" class="control-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Description">{{$task->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="name">Due to</label>
            <input type="date" class="form-control" name="due_date" value="{{$task->due_date}}">
        </div>

        <div class="form-group">
            <label for="listId">List</label>
            <select name="list_id" class="form-control">
                @foreach($lists as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
