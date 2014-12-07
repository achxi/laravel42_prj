@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{ URL::route('default.user.postLogin') }}" method="post">
							<input type="text" placeholder="User Name" name="username" />
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							<input type="password" placeholder="Password" name="password" />
							{{ $errors->first('password', '<p class="error">:message</p>') }}
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
							@if(Session::has('flash_mess'))
								<div class="error">{{ Session::get('flash_mess') }}</div>
							@endif
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@stop