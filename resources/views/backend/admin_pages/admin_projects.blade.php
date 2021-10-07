@extends('backend.partials.admin_master')

@section('content')
    <!-- <h1><p class="text-center" style="padding-top: 250px;"> projects page</h1> -->

    <div>
        <h2>
            <p class="text-center" style="padding-top: 20px;">Projects
        </h2>
    </div>

    <!-- Button trigger modal -->
    <a class="btn btn-light" href="{{ route('new_projects') }}">
        Create Project
      </a>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-add_catagory">
        Add Projects Catagory
    </button>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-delete_catagory">
        View Projects Catagory
    </button>

    @if (session()->has('success'))
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
                <th scope="col">Project Name</th>
                <th scope="col">Catagory</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Completed at</th>
                <th scope="col">Details</th>
                {{-- <th scope="col">Description</th>
                <th scope="col">Tasks</th>
                <th scope="col">Users</th> --}}
                {{-- <th scope="col">Resources</th> --}}
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($view_projects as $add_projects)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $add_projects->id }}</td>
                    <td>{{ $add_projects->project_name }}</td>
                    <td>{{ $add_projects->project_catagory }}</td>
                    <td>{{ $add_projects->project_status }}</td>
                    <td>{{ $add_projects->created_at }}</td>

                    @if($add_projects->project_status =='Completed')
                        
                            <td>{{ $add_projects->updated_at }}</td>
                        
                        @else
                        <td>Not Completed</td>
                        
                    @endif
                    {{-- <td>{{ $add_projects->updated_at }}</td> --}}
                    <td>
                        {{-- <a class="btn btn-light" href="{{ route('add_project_id') }}"> --}}
                            <a class="btn btn-light" href="{{ route('projects_details', $add_projects->id) }}">
                            View
                        </a>
                    </td>
                    {{-- <td>{{ $add_projects->project_description }}</td> --}}
                    {{-- <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#modal-view_description">
                            View
                        </button></td>
                    <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#modal-view_tasks">
                            View
                        </button></td>
                    <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#modal-view_user">
                            View
                        </button></td> --}}
                    {{-- <td>
                        <a class="btn btn-light" href="{{ route('admin_resources_id', $add_projects->id) }}">
                            View
                        </a>
                    </td> --}}
                    <td>
                        <a href="{{ route('edit_project', $add_projects->id) }}"><i class="material-icons">edit</i></a>
                    </td>
                    <td>
                        {{-- <a href="{{route('delete_user',$view_projects->id)}}"> <i onclick="return confirm('Are you sure you want to delete this item?');"  class="material-icons">delete</i></a> --}}
                        <a href="{{ route('delete_project', $add_projects->id) }}"> <i
                                onclick="return confirm('Are you sure you want to delete this item?');"
                                class="material-icons">delete</i></a>
                        {{-- <a href="{{route('delete_user',$view_projects->id)}}" class="btn btn-denger"></a> --}}
                    </td>
                </tr>
            @endforeach()
        </tbody>
    </table>

    <!-- pagination -->
    {{$view_projects->links('pagination::bootstrap-4')}}



    <!-- Modal Create-->
    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Project Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('add_project') }}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label for=""  class="form-label">Project Name</label>
                            <input name="project_name" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Project Catagory</label>
                            <select name="project_catagory" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                @foreach ($view_catagory as $show_catagory)
                                    <option>{{ $show_catagory->catagory_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Project Description</label>
                            <input name="project_description" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Project Status</label>
                            <select name="project_status" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option>Queud</option>
                                <option>Prograssing</option>
                                <option>Completed</option>
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


    <!-- Modal add catagory-->
    <div class="modal fade" id="modal-add_catagory" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <input name="catagory_name" type="text" class="form-control" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal View catagory-->
    <div class="modal fade" id="modal-delete_catagory" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                {{-- <th scope="col">Catagory Id</th> --}}
                                <th scope="col">Catagory Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_catagory as $show_catagory)
                                <tr>
                                    {{-- <td>{{ $show_catagory->id }}</td> --}}
                                    <td>{{ $show_catagory->catagory_name }}</td>
                                    <td>
                                        <a href="{{ route('delete_category', $show_catagory->id) }}"> <i
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="material-icons">delete</i></a>
                                        {{-- {{route('product.delete',$product->id)}} --}}
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Description-->
    <div class="modal fade" id="modal-view_description" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Delete Project Catagory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- @foreach ($collection as $item) --}}
                    @foreach ($view_projects as $add_projects)

                        {{ $add_projects->project_description }}
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- Modal view tasks-->
    <div class="modal fade" id="modal-view_tasks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Tasks Under This Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Task Id</th>
                                <th scope="col">Task Name</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_tasks as $show_tasks)
                                <tr>
                                    <td>{{ $show_tasks->id }}</td>
                                    {{-- <td></td> --}}

                                    <td>{{ $show_tasks->task_name }}</td>
                                    {{-- <td>
                                        <a href=""> <i
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="material-icons">delete</i></a>
                                        
                                    </td> --}}
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Assigned User-->
    <div class="modal fade" id="modal-view_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Assigned User List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($view_user as $user_list) --}}
                            @foreach ($view_tasks as $show_tasks)
                                <tr>
                                    <td></td>
                                    {{-- <td>{{ $user_list->id }}</td>
                                    <td>{{ $user_list->task_name }}</td> --}}
                                    <td>{{ $show_tasks->name }}</td>
                                    <td>
                                        <a href=""> <i
                                                onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="material-icons">delete</i></a>
                                        {{-- {{route('product.delete',$product->id)}} --}}
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>



@endsection
