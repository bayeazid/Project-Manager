@extends('backend.partials.admin_master')

@section('content')

  <div>
  <h2><p class="text-center" style="padding-top: 20px;">User List</h2>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-1">
    Add User
  </button>

  <!-- table -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Index</th>
        <th scope="col">User Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Designation</th>
        <th scope="col">User Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>        
          <a href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-2">Edit</a>
          <a href="" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-3">Delete</a>
        </td>
      </tr>   
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
  <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_user">Add User Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        <form action="{{route('add_user')}}" method="post">
          @csrf
          <div class="mb-1">
            <label for="" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-1">
            <label for="" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-1">
            <label for="" class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-1">
            <label for="" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>  

          <div class="mb-1">  
          <label for="" class="form-label">User Type</label>
          <select name="user_type" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>

          <div class="mb-1">  
          <label for="" class="form-label">User Designation</label>
          <select name="designation" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>


        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" value="submit">
          <!-- <a type="submit" class="btn btn-success">Submit</a>
          <a href="" type="button" class="btn btn-secondary">Close</a> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2-->
  <div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_user">User Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        <form>
          <div class="mb-1">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-1">  
          <label for="" class="form-label">User Type</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>

          <div class="mb-1">  
            <label for="" class="form-label">User Designation</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <a href="" type="button" class="btn btn-success">Submitt</a>
          <a href="" type="button" class="btn btn-secondary">Close</a>
        </div>
      </div>
    </div>

  
  <!-- Modal 3-->
  <!-- <div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_user">User Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        <form>
        <label for="" class="form-label">Are you sure that you want to delete this User!!!</label>
        <div class="modal-footer">
          <a href="" type="button" class="btn btn-success">No</a>
          <a href="" type="button" class="btn btn-secondary">Yes</a>
        </div>
      </div>
    </div> -->
  

@endsection