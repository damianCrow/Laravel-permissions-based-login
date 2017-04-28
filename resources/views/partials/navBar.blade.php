<header>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="@if(!Auth::user()) {{ URL::to('/') }} @else {{ URL::to('dashboard') }} @endif">permissionsApp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      @if (Route::current()->uri() !== '/')

        <ul class="nav navbar-nav navbar-right">
          <li @if (Route::current()->uri() === "dashboard") class="active" @endif>
            <a href="{{ route('dashboard') }}"> Home </a>
          </li>
          <li @if (strpos($_SERVER['REQUEST_URI'], "content") !== false) class="active" @endif>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Content
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="{{ URL::to('content/create') }}"> Create New Content Folder </a></li>
              <li><a tabindex="-1" href="{{ URL::to('content') }}"> View, Edit Or Delete Content Folders </a></li>
            </ul>
          </li>
          <li @if (strpos($_SERVER['REQUEST_URI'], "group") !== false) class="active" @endif>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Groups
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="{{ URL::to('group/create') }}"> Create New Group </a></li>
              <li><a tabindex="-1" href="{{ URL::to('group') }}"> View, Edit Or Delete Groups </a></li>
            </ul>
          </li>
          <li @if (strpos($_SERVER['REQUEST_URI'], "user") !== false) class="active" @endif>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Users
              <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
            
              <li><a tabindex="-1" href="{{ URL::to('user/' . Auth::user()->id . '/edit') }}"> Edit My Account </a></li>

              @if (Auth::user()->isAdmin())
                <li><a tabindex="-1" href="{{ URL::to('user/create') }}"> Add A New User </a></li>
                <li><a tabindex="-1" href="{{ URL::to('user') }}"> View, Edit Or Delete Users </a></li>
              @endif
            </ul> 
          </li>
          <li>
            <a href="{{ url('/signout') }}" class="btn-info" role="button"> Sign Out </a>
          </li>
        </ul>

      @endif
      
    </div>
  </div>
</nav>
</header>