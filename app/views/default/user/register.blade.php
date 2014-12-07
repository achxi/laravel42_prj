@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
						<div class="signup-form"><!--sign up form-->
							<h2>New User Signup!</h2>
							<form action="{{ URL::route('default.user.postregister') }}" method="post">
								<input type="text" placeholder="Login Name" name="loginname" />
								{{ $errors->first('loginname', '<p class="error">:message</p>') }}
								<input type="email" placeholder="Email Address" name="email" />
								{{ $errors->first('email', '<p class="error">:message</p>') }}
								<input type="password" placeholder="Password" name="password" />
								{{ $errors->first('password', '<p class="error">:message</p>') }}
								<button type="submit" class="btn btn-default">Register</button>
							</form>
						</div><!--/sign up form-->
				</div> <!-- /.col-sm-5 col-sm-offset-1 -->
			</div> <!-- /.row -->
		</div> <!-- ./container -->
	</section><!--/form-->

@stop