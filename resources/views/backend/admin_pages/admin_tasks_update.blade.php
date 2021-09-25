@extends('backend.partials.admin_master')

@section('content')
    <h1>
        <p class="text-center" style="padding-top: 50px;">Update Task
    </h1>

    <form action="{{ route('update_tasks', $show_taskname->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-1">
            <label for="" class="form-label">Task Name:</label>

            <select name="task_name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Select From Dropdown</option>
                @foreach ($show_taskname as $taskname)
                    <tr>
                        <option> {{ $taskname->task_name }} </option>
                    </tr>
                @endforeach()
            </select>
        </div>


        <div class="mb-1">
            <label for="" class="form-label">Select Project: </label>
            <select name="project_name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Select from Dropdown</option>
                @foreach ($view_projects as $add_projects)
                    <option value="{{ $add_projects->id }}">{{ $add_projects->project_name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-1">
            <label for="" class="form-label">Add User</label>
            <select name="name" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Select from Dropdown</option>
                @foreach ($view_user as $user_list)
                    <option>{{ $user_list->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Task Status</label>
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

@endsection
