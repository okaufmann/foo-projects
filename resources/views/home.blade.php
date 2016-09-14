@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            <p>
                <a href="{{url('task/create')}}">Create a new task</a> |
                <a href="{{url('task-list/create')}}">Create a new task list</a>
            </p>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>List</th>
                        <th>Due to</th>
                        <th>Created At</th>
                        <th>Modified At</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->name}}</td>
                            <td>{{$task->list->name}}</td>
                            <td>{{$task->due_date}}</td>
                            <td>{{$task->created_at}}</td>
                            <td>{{$task->modified_at}}</td>
                            <td><a href="{{url('task/'.$task->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{url('task/'.$task->id.'/delete')}}"
                                   class="btn btn-danger">Delete</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No records</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
