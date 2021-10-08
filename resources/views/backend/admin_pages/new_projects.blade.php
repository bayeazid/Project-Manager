@extends('backend.partials.admin_master')

@section('content')

    <form action="{{ route('add_project') }}" method="post">
        @csrf
        <div class="mb-1">
            <label for="" class="form-label">Project Name</label>
            <input name="project_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Project Catagory</label>
            <select name="project_catagory" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                @foreach ($view_catagory as $show_catagory)
                    <option>{{ $show_catagory->catagory_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-1">
            <label for="">Project Description</label>
            <textarea name="project_description" type="text" class="form-control" id="" rows="3"></textarea>
        </div>

{{--        <div class="mb-1">--}}
{{--            <label for="" class="form-label">Project Description</label>--}}
{{--            <input name="project_description" type="text" class="form-control" id="exampleInputEmail1"--}}
{{--                aria-describedby="emailHelp">--}}
{{--        </div>--}}

        <div class="mb-1">
            <label for="" class="form-label">Project Status</label>
            <select name="project_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option>Queud</option>
                <option>Prograssing</option>
                <option>Completed</option>
            </select>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="submit">
        </div>
    </form>





@endsection
