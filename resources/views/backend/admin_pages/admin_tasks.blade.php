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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-add-type">
        Add Tasks Name
    </button>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-view-type">
        View Tasks Name
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
                <th scope="col">Task Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Project Name</th>
                <th scope="col">Assigned User</th>
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
                    <td>{{ $show_tasks->task_status }}</td>
                    <td>{{ $show_tasks->created_at }}</td>
                    <td>
                        Project
                    </td>
                    <td>
                        User
                    </td>
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
                            <label for="" class="form-label">Task Name</label>
                            <input name="task_name" type="text" class="form-control", placeholder="Type Name or Select from Dropwown">
                                <select name="task_name" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Dropdown</option>
                                <option >Queud</option>
                                <option >Prograssing</option>
                                <option >Completed</option>
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Select Project</label>
                            <select name="select_project" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select from Dropdown</option>
                                <option >Queud</option>
                                <option >Prograssing</option>
                                <option >Completed</option>
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Add User</label>
                            <select name="add_user" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select from Dropdown</option>
                                <option >Queud</option>
                                <option >Prograssing</option>
                                <option >Completed</option>
                            </select>
                        </div>
                        
                        <div class="mb-1">
                            <label for="" class="form-label">Task Status</label>
                            <select name="task_status" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option >Queud</option>
                                <option >Prograssing</option>
                                <option >Completed</option>
                            </select>
                        </div>
                                       
                        
                       
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="submit">                            
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


        <!-- Modal Add-->
        <div class="modal fade" id="modal-add-type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_user">Add Tasks Name</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
    
                        <form action="{{ route('admin_tasks_name') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="" class="form-label">Task Name</label>
                                <input name="task_name" type="text" class="form-control", placeholder="Type Name">                                    
                                </select>
                            </div>   
                            
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="submit">                            
                            </div>
                        </form>
    
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Modal View-->
        <div class="modal fade" id="modal-view-type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_user">View Project Catagory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>          
                                    <th scope="col">Catagory Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($view_catagory as $show_catagory) --}}
                                    <tr>
                                        <td></td>
                                        {{-- <td>{{ $show_catagory->id }}</td>
                                        <td>{{ $show_catagory->catagory_name2 }}</td> --}}
                                        <td>
                                            <a href=""><i class="material-icons">edit</i></a>
                                        </td>
                                        <td>
                                            <a href=""><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>
                                {{-- @endforeach() --}}
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>
        </div>




@endsection
