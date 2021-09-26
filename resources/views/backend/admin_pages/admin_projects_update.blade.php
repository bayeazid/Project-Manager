@extends('backend.partials.admin_master')

@section('content')
    <h1>
        <p class="text-center" style="padding-top: 50px;">Edit Project
    </h1>

    <div class="center">
    <form action="{{ route('update_project', $view_projects->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-1">
            <label class="form-label">Project Name</label>
            <input value="{{ $view_projects->project_name }}" name="project_name" type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-1">
            <label value="" class="form-label">Previous Catagory: @php echo($view_projects->project_catagory) @endphp</label>
            <select name="project_catagory" class="form-select form-select-sm" aria-label=".form-select-sm example">
                {{-- <option selected>Open this select menu</option> --}}
                @foreach ($view_catagory as $show_catagory)
                    <option>{{ $show_catagory->catagory_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-1">
            <label value="" class="form-label">Project Description</label>
            <input value="{{ $view_projects->project_description }}" name="project_description" type="text"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-1">
            <label value="" class="form-label">Previous Status: @php echo($view_projects->project_status) @endphp </label>
            <select name="project_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option>Queud</option>
                <option>Prograssing</option>
                <option>Completed</option>
            </select>
        </div>
        <div class="modal-footer">
            <input  type="submit" class="btn btn-success" value="submit">
        </div>
    </form>
</div>






    <style>
        .center{
            margin-right: 100px;
            margin-left: 100px;
            padding-right: 100px;
            padding-left: 100px;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: aliceblue;
        }
        .btn-success{
            font-size: 1.2rem;
            box-sizing: border-box;
            
        }
    
    </style>




@endsection
