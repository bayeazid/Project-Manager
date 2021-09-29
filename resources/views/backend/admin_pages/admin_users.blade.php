@extends('backend.partials.admin_master')

@section('content')

    <div>
        <h2>
            <p class="text-center" style="padding-top: 20px;">User Lists
        </h2>
    </div>

    <a class="btn btn-light" href="{{ route('new_users') }}">
        Add User
      </a>

    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-add-type">
        Add User Designation
    </button>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-view-type">
        View User Designation
    </button>


    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Designation</th>
                <th scope="col">User Type</th>
                <th scope="col">Created at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($view_user as $user_list)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user_list->id }}</td>
                    <td>{{ $user_list->name }}</td>
                    <td>{{ $user_list->email }}</td>
                    <td>{{ $user_list->phone }}</td>
                    <!-- <td>{{ $user_list->password }}</td> -->
                    <td>{{ $user_list->user_type }}</td>
                    <td>{{ $user_list->designation }}</td>
                    <td>{{ $user_list->created_at }}</td>
                    <td>
                        <a href="{{ route('edit_user', $user_list->id) }}"><i class='fas fa-user-edit' data-bs-toggle="modal"
                                data-bs-target="#modal-delete"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('delete_user', $user_list->id) }}"> <i
                                onclick="return confirm('Are you sure you want to delete this item?');"
                                class="material-icons">delete</i></a>
                        {{-- {{route('product.delete',$product->id)}} --}}
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

    <!-- Modal 1-->
    <div class="modal fade" id="modal-add-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Add User Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add_user') }}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Phone</label>
                            <input name="phone" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">User Type</label>
                            <select name="user_type" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">User Designation</label>
                            <select name="designation" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected>Select Designation</option>
                                @foreach ($view_designations as $show_designation)
                                    <option>{{ $show_designation->user_designations }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="submit">
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="modal-add-type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">Add User Designation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('add_designation') }}" method="post">
                        @csrf
                        <div class="mb-1">
                            <label for="" class="form-label">Enter Type Name</label>
                            <input name="user_designation" type="text" class="form-control" , placeholder="Type Name">
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

    <!-- Modal 3-->
    <div class="modal fade" id="modal-view-type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_user">View User Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Type Name</th>
                                {{-- <th scope="col">Edit</th> --}}
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($view_designations as $show_designation)
                                <tr>
                                    {{-- {{variable name -> field name from DB}} --}}
                                    <td>{{ $show_designation->user_designations }}</td>
                                    {{-- <td>
                                    <a href=""><i class="material-icons" >edit</i></a>
                                </td> --}}
                                    <td>
                                        <a href="{{ route('delete_designation', $show_designation->id) }}"> <i
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





    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
