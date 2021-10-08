@extends('backend.partials.admin_master')

@section('content')
<!-- <h1><p class="text-center" style="padding-top: 250px;"> tasks page</h1> -->
<!-- <h1><p class="text-center"> tasks page</h1> -->
<!-- table -->
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Project Name</th>
        <th scope="col">Task Name</th>
        <th scope="col">Task Status</th>
        <th scope="col">Created at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$task->task->project_name}}</td>
            <td>{{$task->task_name}}</td>
            <td>{{$task->task_status}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
