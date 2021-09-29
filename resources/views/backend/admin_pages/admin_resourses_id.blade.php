@extends('backend.partials.admin_master')

@section('content')
    <h2>
        <p class="text-center" style="padding-top: 30px;">Project Resources
    </h2>

    <h3> @php echo($view_projects->project_name) @endphp</h3>

    <h4> Upload File: </h4>
    <form method="POST" action="" enctype="multipart/form-data">
        <label class="form-label" for="customFile">Choose files to upload</label>
        <input name="file_upload" type="file" class="form-control" id="customFile" />
        <input  type="submit" class="btn btn-success" value="Upload">
    </form>
    {{-- {{ route('file_upload') }} --}}

    <h4> Files: </h4>



@endsection
