@extends('app')
@section('title') Login @parent @stop
@section('content')
<section id="profile" class="bg-light-gray">
<div class="container">
		<div id="loginbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info" >
						<div class="panel-heading">
								<div class="panel-title">Sign In</div>
								<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a  href="{{ url('/password/email') }}">Forgot Your Password?</a></div> -->
						</div>
						<div style="padding-top:30px" class="panel-body" >
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
								<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div style="margin-bottom: 25px" class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input type="email" class="form-control " name="email" placeholder="Email Address" value="{{ old('email') }}">
										</div>
										<div style="margin-bottom: 25px" class="input-group ">
												<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input type="password" class="form-control" placeholder="Password" name="password">
										</div>
										<div style="margin-top:10px" class="form-group">
												<!-- Button -->
												<div class="col-sm-12 controls">
													 <button type="submit" class="btn btn-primary btn-block">Login</button>
												</div>
										</div>


										<div class="form-group">
												<div class="col-md-12 control">
														<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
																Don't have an account!

																{!!link_to('auth/register', 'Sign Up Here', $attributes = array(), $secure = null);!!}
														</div>
												</div>
										</div>
								</form>



						</div>
				</div>
		</div>
</div>

</section>

<!--


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
