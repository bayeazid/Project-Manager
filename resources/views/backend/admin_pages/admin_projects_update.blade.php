@extends('backend.partials.admin_master')

@section('content')
    <h1>
        <p class="text-center" style="padding-top: 50px;">Update Project
    </h1>


    <label for="exampleFormControlTextarea1">Old Project Name</label>
    <div class="form-group">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="New Project Name">
    </div>

    <label for="exampleFormControlTextarea1">Old Catagory Name</label>
    <select name="designation" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Option 0</option>
        <option>Option 1</option>
        <option>Option 1</option>
        <option>Option 1</option>
    </select>

    <label for="exampleFormControlTextarea1">Current Status</label>
    <select name="designation" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Option 0</option>
        <option>Option 1</option>
        <option>Option 1</option>
        <option>Option 1</option>
    </select>

    <label for="exampleFormControlTextarea1">Previous Description:</label>
    <div></div>
    {{-- <label for="exampleFormControlTextarea1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin orci a magna dignissim</label> --}}
    <textarea class="form-control" id="exampleFormControlTextarea1" readonly
        rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin orci a magna dignissim</textarea>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
        placeholder="Enter New Descriotion"></textarea>

    <label for="exampleFormControlTextarea1">Tasks</label>
    <select name="designation" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Option 0</option>
        <option>Option 1</option>
        <option>Option 1</option>
        <option>Option 1</option>
    </select>

    
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
