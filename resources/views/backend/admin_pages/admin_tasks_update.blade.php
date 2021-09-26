@extends('backend.partials.admin_master')

@section('content')
    <h1>
        <p class="text-center" style="padding-top: 50px;">Update Task
    </h1>

    <div class="center">
    <form action="{{ route('update_tasks', $view_tasks->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-1">
            <label for="" class="form-label">Task Name: @php echo($view_tasks->task_name) @endphp</label>

            <select value="" name="task_name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                {{-- <option selected>Select From Dropdown</option> --}}
                @foreach ($show_taskname as $taskname)
                    <tr>
                        <option> {{ $taskname->task_name }} </option>
                    </tr>
                @endforeach()
            </select>
        </div>


        <div class="mb-1">
            <label for="" class="form-label">Select Project:  @php echo($view_tasks->project_name) @endphp</label>
            <select name="project_name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                {{-- <option selected>Select from Dropdown</option> --}}
                @foreach ($view_projects as $add_projects)
                    <option value="{{ $add_projects->id }}">{{ $add_projects->project_name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-1">
            <label for="" class="form-label">Previous User: @php echo($view_tasks->name)@endphp</label>
            <select name="name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                {{-- <option selected>Select from Dropdown</option> --}}
                @foreach ($view_user as $user_list)
                    <option>{{ $user_list->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Task Status: @php echo($view_tasks->task_status)@endphp</label>
            <select name="task_status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option>Queud</option>
                <option>Prograssing</option>
                <option>Completed</option>
            </select>
        </div>


        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="submit">
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
