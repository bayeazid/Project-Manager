@extends('backend.partials.admin_master')

@section('content')
{{-- <h1><p class="text-center" style="padding-top: 250px;"> tasks page</h1> --}}
    <div>
        <h2>
            <p class="text-center" style="padding-top: 20px;">Tasks
        </h2>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-create">
        Create Tasks
    </button>




    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
 
    

    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Task Name</th>
                {{-- <th scope="col">Project Id</th>
                <th scope="col">Project Name</th> --}}
                {{-- <th scope="col">Project Status</th> --}}
                <th scope="col">Task Status</th>
                <th scope="col">Created at</th>
                {{-- <th scope="col">Assigned User</th> --}}
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($view_tasks as $show_tasks)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $show_tasks->id }}</td>
                    <td>{{ $show_tasks->task_name }}</td>
                    {{-- <td>{{ $add_projects->id }}</td>
                    <td>{{ $add_projects->project_name }}</td> --}}
                    <td>{{ $show_tasks->task_status }}</td>
                    {{-- <td>{{ $view_task->assigned_user }}</td> --}}
                    <td>{{ $show_tasks->created_at }}</td>
                    <td>
                        <a href=""><i class="material-icons">edit</i></a>
                    </td>
                    <td>
                        <a href=""><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            @endforeach()
        </tbody>
    </table>

    <!-- pagination -->
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <span class="page-link">
                    2
                    <span class="sr-only"></span>
                </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>



    <!-- Modal Create-->
    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Creat Tasks</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('add_tasks') }}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label for="" class="form-label">task Name</label>
                            <input name="task_name" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        {{-- <div class="mb-1">
                            <label for="" class="form-label">Project Name</label>
                            <select name="project_catagory" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select a Project</option>
                                @foreach ($view_projects as $add_projects)
                                    <option>{{ $add_projects->project_name }}</option>
                                @endforeach        
                            </select>
                        </div> --}}

                        {{-- <div class="mb-1">
                            <label for="" class="form-label">Task Status</label>
                            <input name="task_status" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div> --}}

                        <div class="mb-1">
                            <label for="" class="form-label">Task Status</label>
                            <select name="task_status" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option >Queud</option>
                                <option >Prograssing</option>
                                <option >Completed</option>
                            </select>
                        </div>

                        

                        {{-- <div class="mb-1">
                            <label for="" class="form-label">Assign User</label>
                            <select name="project_catagory" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select User</option>
                                @foreach($view_user as $user_list)
                                    <option>{{$user_list->name}}</option>
                                @endforeach        
                            </select>
                        </div> --}}

                        

                       
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="submit">                            
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal add catagory-->
    <div class="modal fade" id="modal-add_catagory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Create New Project Catagory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('addcategory') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="" class="form-label">Catagory Name</label>
                            <input name="catagory_name" type="text" class="form-control" aria-describedby="emailHelp" required>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    





@endsection
