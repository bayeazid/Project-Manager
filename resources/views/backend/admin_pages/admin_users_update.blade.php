@extends('backend.partials.admin_master')

@section('content')
    <h1>
        <p class="text-center" style="padding-top: 50px;">Update User
    </h1>


    <label for="exampleFormControlTextarea1">Previous Name</label>
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New Name">
    </div>

    <label for="exampleFormControlTextarea1">Previous Email</label>
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New Email">
    </div>

    <label for="exampleFormControlTextarea1">Previous Phone</label>
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New Phone">
    </div>


    <label for="exampleFormControlTextarea1">New Password</label>
    <div class="form-group">
        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Type Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Confirm Password">
    </div>

    
    <a class="btn btn-success" href=""> Update</a>







    {{-- <tbody>
            @foreach ($view_projects as $add_projects)
                <tr>
                    <td>{{ $add_projects->project_name }}</td>
                    <td>{{ $add_projects->project_catagory }}</td>
                    <td>{{ $add_projects->project_status }}</td>
                    <td>{{ $add_projects->project_description }}</td>
                    <td>
                        <label for="exampleFormControlTextarea1">New Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </td>
                    <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#modal-view_tasks">
                        View
                    </button></td>
                    <td><button type="button" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#modal-view_user">
                        View
                    </button></td>                                       
                    
                </tr>
            @endforeach()
        </tbody>
    </table> --}}




@endsection
