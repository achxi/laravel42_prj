@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add New Product</h2>
						{{ Form::open(array('route' => 'default.user.postLogin', 'method' => 'post')) }}
							{{ Form::text('username', null, array('placeholder' => 'ID Product')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							{{ Form::text('password', null, array('placeholder' => 'ID Type')) }}
							{{ $errors->first('password', '<p class="error">:message</p>') }}
							{{ Form::text('username', null, array('placeholder' => 'Product Name')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}		
							{{ Form::text('username', null, array('placeholder' => 'Specification')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}	
							{{ Form::text('username', null, array('placeholder' => 'Describe')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							{{ Form::text('username', null, array('placeholder' => 'Picture')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}	
							{{ Form::text('username', null, array('placeholder' => 'Product Price')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}
							{{ Form::text('username', null, array('placeholder' => 'Menu')) }}
							{{ $errors->first('username', '<p class="error">:message</p>') }}																																				
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