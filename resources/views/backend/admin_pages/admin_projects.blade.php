@extends('backend.partials.admin_master')

@section('content')
    <!-- <h1><p class="text-center" style="padding-top: 250px;"> projects page</h1> -->

    <div>
        <h2>
            <p class="text-center" style="padding-top: 20px;">Projects
        </h2>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-create">
        Create Projects
    </button>

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
                <th scope="col">Index</th>
                <th scope="col">Project Id</th>
                <th scope="col">Project Name</th>
                <th scope="col">Project Catagory</th>
                <th scope="col">Project Status</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($view_projects as $add_projects)
                <tr>
                    <td>{{ $add_projects->id }}</td>
                    <td>{{ $add_projects->id }}</td>
                    <td>{{ $add_projects->project_name }}</td>
                    <td>{{ $add_projects->project_catagory }}</td>
                    <td>{{ $add_projects->project_status }}</td>
                    {{-- <td>{{ $add_projects->project_description }}</td> --}}
                    <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#modal-view_description">
                            Description
                        </button></td>
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
                    <h5 class="modal-title" id="add_user">Project Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('add_project') }}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label for="" class="form-label">Project Name</label>
                            <input name="project_name" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Project Catagory</label>
                            <select name="project_catagory" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                @foreach ($view_catagory as $show_catagory)
                                    <option>{{ $show_catagory->catagory_name2 }}</option>
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

    <!-- Modal delete catagory-->
    <div class="modal fade" id="modal-delete_catagory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Delete Project Catagory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Catagory Id</th>
                                <th scope="col">Catagory Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_catagory as $show_catagory)
                                <tr>
                                    <td>{{ $show_catagory->id }}</td>
                                    <td>{{ $show_catagory->catagory_name2 }}</td>
                                    <td>
                                        <a href=""><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal View-->
    <div class="modal fade" id="modal-view_description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Delete Project Catagory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                        {{ $add_projects->project_description }}

                </div>

            </div>
        </div>
    </div>



@endsection