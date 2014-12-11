@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
						<div class="signup-form"><!--sign up form-->
							<h2>New User Signup!</h2>
							{{ Form::open(array('route' => 'default.user.postregister', 'method' => 'post')) }}
								{{ Form::text('loginname', null, array('placeholder' => 'Login Name')) }}
								{{ $errors->first('loginname', '<p class="error">:message</p>') }}
								{{ Form::email('email', null, array('placeholder' => 'Email Address')) }}
								{{ $errors->first('email', '<p class="error">:message</p>') }}
								{{ Form::password('password', array('placeholder' => 'Password')) }}
								{{ $errors->first('password', '<p class="error">:message</p>') }}
								{{ Form::password('password_confirmation', array('placeholder' => 'Type Password Again')) }}
								{{ $errors->first('password_confirmation', '<p class="error">:message</p>') }}
								{{ Form::button('Register', array('type' => 'submit', 'class' => 'btn btn-default')) }}
							{{ Form::close() }}
						</div><!--/sign up form-->
				</div> <!-- /.col-sm-5 col-sm-offset-1 -->
			</div> <!-- /.row -->
		</div> <!-- ./container -->
	</section><!--/form-->

@stop