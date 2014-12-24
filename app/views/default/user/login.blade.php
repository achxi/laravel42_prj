@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						{{ Form::open(array('route' => 'default.user.postLogin', 'method' => 'post')) }}
							{{ Form::text('username', null, array('placeholder' => 'User Name')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							{{ Form::password('password', array('placeholder' => 'Password')) }}
							{{ $errors->first('password', '<p class="error">:message</p>') }}
							<span>
								{{ Form::checkbox('remember', 1, null, ['class' => 'checkbox']) }}
								Keep me signed in
							</span>
							{{ Form::button('Login', array('type' => 'submit', 'class' => 'btn btn-default')) }}
							@if(Session::has('flash_message'))
								<div class="error">{{ Session::get('flash_mess') }}</div>
							@endif
						{{ Form::close() }}
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@stop