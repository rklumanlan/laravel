@extends('app')
@section('title') Register @parent @stop
@section('content')
<section id="profile" class="bg-light-gray">
<div class="container">
		<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info" >
						<div class="panel-heading">
								<div class="panel-title">Register</div>
								<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a  href="{{ url('/password/email') }}">Forgot Your Password?</a></div> -->
						</div>
						<div style="padding-top:30px" class="panel-body" >
								<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                {!!
                                Form::open(['method'=>'PATCH','route'=>['user_profile.update_pass',Auth::id()],'class'=>'form-horizontal']) !!}

                                @include('partials.change_pass_form')
                                {!!Form::close()!!}

						</div>
				</div>
		</div>
</div>
</section>



@endsection
