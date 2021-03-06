<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Cultural Institution</a>
    </div>
    
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            @if ($user == null)
                <a href="login">Login</a>
            @else
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    {{{ $user->email }}}
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="events">Manage Events</a></li>
                    <li><a href="price-groups">Manage Price Groups</a></li>
                    <li><a href="genres">Manage Genres</a></li>
                    <li><hr /></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul
            @endif
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="programme"><i class="glyphicon glyphicon-calendar" style="margin-left: 3px;"></i> Programme</a>
                </li>
				<li>
                    <a href="archive"><i class="fa fa-archive fa-fw"></i> Archive</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gear fa-fw"></i> Management<span class="fa arrow" style="margin-top: 3px;"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="events">Events</a>
                        </li>
						<li>
                            <a href="price-groups">Price Groups</a>
                        </li>
                        <li>
                            <a href="genres">Genres</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="about"><i class="fa fa-question-circle fa-fw"></i> About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
