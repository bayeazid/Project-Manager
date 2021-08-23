@extends('backend.partials.admin_master')

@section('content')
<!-- <h1><p class="text-center" style="padding-top: 250px;"> projects page</h1> -->

  <div>
  <h2><p class="text-center" style="padding-top: 20px;">Projects</h2>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modal-create">
    Create Projects
  </button>

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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($view_projects as $add_projects)
      <tr>
        <td>{{$add_projects->id}}</td>
        <td>{{$add_projects->id}}</td>
        <td>{{$add_projects->project_name}}</td>
        <td>{{$add_projects->project_catagory}}</td>
        <td>{{$add_projects->project_status}}</td>
        <td>{{$add_projects->project_description}}</td>
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
          
        <form action="{{route('add_user')}}" method="post">
          @csrf
          <div class="mb-1">
            <label for="" class="form-label">Project Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="mb-1">  
          <label for="" class="form-label">Project Catagory</label>
          <select name="user_type" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>

          <div class="mb-1">
            <label for="" class="form-label">Project Description</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

   
  <!-- Modal View-->
  <div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_user">Project Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form>
        <label for="" class="form-label">"This is project description"</label>
        <div class="modal-footer">
          <a href="" type="button" class="btn btn-light">Close</a>
        </div>
      </div>
    </div>
  
@endsection
