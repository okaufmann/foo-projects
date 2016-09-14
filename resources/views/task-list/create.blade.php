@extends('layouts.app')

@section('content')

    <h1>Create a new task</h1>

    <form action="{{url('task-list')}}" method="post" role="form">

        {!! csrf_field() !!}

        @include('partials.form-errors')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="I have to...">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
