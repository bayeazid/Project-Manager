@extends('backend.partials.admin_master')

@section('content')
    <!-- <h1><p class="text-center" style="padding-top: 250px;"> projects page</h1> -->

    <div>
        <h2>
            <p class="text-center" style="padding-top: 20px;">Projects Details
        </h2>
    </div>


    <h4>Project Name: @php echo($view_projects->project_name) @endphp</h4>
    <h4>Catagory Name: @php echo($view_projects->project_catagory) @endphp</h4>
    <h4>Catagory Name: @php echo($view_projects->project_description) @endphp</h4>


    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center">Tasks Under this Project</th>
                <th style="text-align: center">User Under this Project</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Task Id</th>
                                <th scope="col">Task Name</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_tasks as $show_tasks)
                                <tr>
                                    <td>{{ $show_tasks->id }}</td>
                                    <td>{{ $show_tasks->task_name }}</td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </th>
                <th>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">User Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_tasks as $show_tasks)
                                <tr>
                                    <td>{{ $show_tasks->id }}</td>
                                    <td>{{ $show_tasks->name }}</td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </th>
            </tr>
        </tbody>
    </table>
    <a class="btn btn1" style="" href="{{ route('add_project') }}">
        Back
    </a>

    <style>
        .btn1 {
            background-color: rgb(236, 240, 245);
            box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
            font-weight: 500;
            border-radius: 10px;
            width: 300px;
            height: 50px;
            padding: 5px;
            font-size: 1.5rem;
            margin-left: 20px;
            color: #333;
            color: rgb(124, 124, 124);
            /* margin: auto; */

        }
    </style>
    
@endsection
