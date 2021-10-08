<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
          @if(auth()->user()->role=='Admin')
            <ul class="nav flex-column">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin_home') }}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin_projects') }}">
                  Projects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin_tasks') }}">
                  Tasks
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin_users') }}">
                  Users
                </a>
              </li>
            </ul>
          @endif

              @if(auth()->user()->role=='user')
                  <ul class="nav flex-column">


                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('user_tasks') }}">
                              Tasks
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('user_accepted_task') }}">
                              Accepted Tasks
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('user_completed_tasks') }}">
                              Completed Tasks
                          </a>
                      </li>
                  </ul>
              @endif
      </div>
    </nav>
