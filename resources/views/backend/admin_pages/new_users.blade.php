@extends('backend.partials.admin_master')

@section('content')


    <form action="{{ route('add_user') }}" method="post">
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
                <option>User</option>
                <option>Admin</option>
            </select>
        </div>

        <div class="mb-1">
            <label for="" class="form-label">User Designation</label>
            <select name="designation" class="form-select form-select-sm" aria-label=".form-select-sm example">
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





    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
