<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('admin_home') }}">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_files') }}">
              <span data-feather="file"></span>
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_tasks') }}">
              <span data-feather="users"></span>
              Tasks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_users') }}">
              <span data-feather="bar-chart-2"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('admin_assets') }}">
              <span data-feather="users"></span>
              Assets Library 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_notification') }}">
              <span data-feather="layers"></span>
              Notification Manager
            </a>
          </li>
        </ul>
      </div>
    </nav>