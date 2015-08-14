      <!-- Static navbar -->
      <nav class="navbar navbar-default contentnav">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">MC Projects</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/projects">Projects</a></li>
              <li><a href="/forum">Forum</a></li>
            </ul>
            <!-- Logged in -->
            <ul class="nav navbar-nav navbar-right">

              @if(Auth::check())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{ Auth::getUser()->name }}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/settings">My Account</a></li>
                  <li><a href="/projects/{{ Auth::getUser()->name }}">My Projects</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/dashboard">Dashboard</a></li>
                  <li><a href="/profile">My Profile</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/messages">Messages <span class="badge">3</span> </a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/auth/logout">Logout</a></li>
                </ul>
              </li>
                @else
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>