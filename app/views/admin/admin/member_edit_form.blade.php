@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Edit Member Info</h2>
						{{ Form::model($user, array('route' => 'admin.member_edit', 'method' => 'post')) }}
							{{ Form::text('hoten', null, array('placeholder' => 'Full Name')) }}
							{{ $errors->first('hoten', '<p class="error">:message</p>') }}
							{{ Form::text('diachi', null, array('placeholder' => 'Address')) }}
							{{ $errors->first('diachi', '<p class="error">:message</p>') }}
							{{ Form::email('email', null, array('placeholder' => 'Email')) }}
							{{ $errors->first('email', '<p class="error">:message</p>') }}		
							{{ Form::number('dienthoai', null, array('placeholder' => 'Phone')) }}
							{{ $errors->first('dienthoai', '<p class="error">:message</p>') }}	
							{{ Form::text('user', null, array('placeholder' => 'Username')) }}
							{{ $errors->first('user', '<p class="error">:message</p>') }}
							{{ Form::password('pass', array('placeholder' => 'Password')) }}
							{{ $errors->first('pass', '<p class="error">:message</p>') }}	
							{{ Form::password('re_password', array('placeholder' => 'Re-Password')) }}
							{{ $errors->first('re_password', '<p class="error">:message</p>') }}
							{{ Form::number('hieuluc', null, array('placeholder' => 'Privilege')) }}
							{{ $errors->first('hieuluc', '<p class="error">:message</p>') }}
							{{ Form::number('capquyen', null, array('placeholder' => 'Level')) }}
							{{ $errors->first('capquyen', '<p class="error">:message</p>') }}		
							{{ Form::hidden('id', $id) }}

							{{ Form::button('Update', array('type' => 'submit', 'class' => 'btn btn-default')) }}
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