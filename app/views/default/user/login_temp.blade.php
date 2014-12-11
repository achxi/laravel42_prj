@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						{{ Form::open(array('url' => 'postlogin', 'method' => 'post')) }}
							{{ Form::text('username', null) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							{{ Form::password('password', Input::old('password'), array('placeholder' => 'password')) }}
							{{ $errors->first('password', '<p class="error">:message</p>') }}
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							{{Form::submit('Login')}}
							@if(Session::has('flash_mess'))
								<div class="error">{{ Session::get('flash_mess') }}</div>
							@endif
						{{ Form::close() }}
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@stop