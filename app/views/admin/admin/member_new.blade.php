@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add New Member</h2>
						{{ Form::open(array('route' => 'admin.member_add', 'method' => 'post')) }}
							{{ Form::text('fullname', null, array('placeholder' => 'Full Name')) }}
							{{ $errors->first('fullname', '<p class="error">:message</p>') }}
							{{ Form::text('address', null, array('placeholder' => 'Address')) }}
							{{ $errors->first('address', '<p class="error">:message</p>') }}
							{{ Form::email('email', null, array('placeholder' => 'Email')) }}
							{{ $errors->first('email', '<p class="error">:message</p>') }}		
							{{ Form::number('phone', null, array('placeholder' => 'Phone')) }}
							{{ $errors->first('phone', '<p class="error">:message</p>') }}	
							{{ Form::text('loginname', null, array('placeholder' => 'Username')) }}
							{{ $errors->first('loginname', '<p class="error">:message</p>') }}
							{{ Form::password('password', array('placeholder' => 'Password')) }}
							{{ $errors->first('password', '<p class="error">:message</p>') }}	
							{{ Form::password('re_password', array('placeholder' => 'Re-Password')) }}
							{{ $errors->first('re_password', '<p class="error">:message</p>') }}
							{{ Form::number('privilege', null, array('placeholder' => 'Privilege')) }}
							{{ $errors->first('privilege', '<p class="error">:message</p>') }}
							{{ Form::number('level', null, array('placeholder' => 'Level')) }}
							{{ $errors->first('level', '<p class="error">:message</p>') }}												
							{{ Form::button('Add', array('type' => 'submit', 'class' => 'btn btn-default')) }}
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