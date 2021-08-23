<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('user_home')}}">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user_projects')}}">
              Project Files
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user_tasks')}}">
              Tasks
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user_assets')}}">
              Asset Library 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('user_notification')}}">
              Notification
            </a>
          </li>
        </ul>
      </div>
    </nav>