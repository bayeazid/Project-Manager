@extends('backend.partials.admin_master')

@section('content')
    <h2>
        <p class="text-center" style="padding-top: 30px;">Project Resources
    </h2>

    @foreach ($view_projects as $add_projects)
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $add_projects->project_name }}</h5>
                            <p class="card-text">{{ $add_projects->project_catagory }}</p>
                            <a href="{{ route('admin_resources_id', $add_projects->id) }}" class="btn btn-primary">View
                                Files</a>
                        </div>
                    </div>
                </div>

                <div class="padding"></div>
    @endforeach







    <style>
        .padding {
            padding: 20px;
        }

    </style>

@endsection
