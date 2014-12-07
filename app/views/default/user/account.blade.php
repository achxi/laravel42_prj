@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
						<div class="signup-form"><!--sign up form-->
							<h2>Your Account Information</h2>
							{{ Form::model($user, array('route' => array('default.user.postaccount', $user->user))) }}
							    {{ Form::text('loginname', $user->user, array('placeholder' => 'Login Name', 'readonly' => 'readonly')) }}
								{{ $errors->first('loginname', '<p class="error">:message</p>') }}
							    {{ Form::email('email', $user->email, array('placeholder' => 'Email Address')) }}
								{{ $errors->first('email', '<p class="error">:message</p>') }}
							    {{ Form::password('password', array('placeholder' => 'Password')) }}
								{{ $errors->first('password', '<p class="error">:message</p>') }}
								<button type="submit" class="btn btn-default">Update</button>
							{{ Form::close() }}
						</div><!--/sign up form-->
				</div> <!-- /.col-sm-5 col-sm-offset-1 -->
			</div> <!-- /.row -->
		</div> <!-- ./container -->
	</section><!--/form-->

@stop