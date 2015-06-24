
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top wet-asphalt">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
						<div class="navbar-brand" >
            <a href="#"><img src="{{ asset('/images/tecblogo.png') }}" alt="NTecB" class="logo" ></a>
					</div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
							<li class="{{ (Request::is('home') ? 'active' : '') }}"><a href="{{ url('/home') }}"><span class="icon-home"></span> Home</a></li>
							<li class="{{ (Request::is('about_us') ? 'active' : '') }}"><a href="{{ url('/about_us') }}">About Us</a></li>
							<li class="{{ (Request::is('portfolio') ? 'active' : '') }}"><a href="{{ url('/portfolio') }}">Portfolio</a></li>
							<li class="{{ (Request::is('team') ? 'active' : '') }}"><a href="{{ url('/team') }}">Team</a></li>
							<li class="{{ (Request::is('contact_us') ? 'active' : '') }}"><a href="{{ url('/contact_us') }}">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}">
						<a href="{!! URL::to('auth/login') !!}">
							<i class="glyphicon glyphicon-log-in"></i> Login
						</a>
					</li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="glyphicon glyphicon-user"></i><i
                                    class="glyphicon glyphicon-collapse-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==0)
                                    <li>
                                        <a href="{!! URL::to('/user_profile') !!}"> Profile</a>
                                    </li>
									<li>
                                        <a href="{!! URL::Route('user_profile.change_pass') !!}"> Change password</a>
                                    </li>
								@elseif(Auth::user()->admin==1)
									<li>
										<a href="{!! URL::to('/admin_dashboard') !!}"> Dashboard</a>
									</li>
									<li>
										<a href="{!! URL::Route('user_profile.change_pass') !!}"> Change password</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif

                            <li>
                                <a href="{!! URL::to('auth/logout') !!}"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
