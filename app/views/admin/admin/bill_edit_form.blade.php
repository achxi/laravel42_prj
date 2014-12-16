@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Edit Bill Info</h2>
						{{ Form::model($bill, array('route' => 'admin.bill_edit', 'method' => 'post')) }}
							{{ Form::number('id_hoadon', null, array('placeholder' => 'Bill ID')) }}
							{{ $errors->first('id_hoadon', '<p class="error">:message</p>') }}	
							{{ Form::text('hoten', null, array('placeholder' => 'Full Name')) }}
							{{ $errors->first('hoten', '<p class="error">:message</p>') }}
							{{ Form::text('diachi', null, array('placeholder' => 'Address')) }}
							{{ $errors->first('diachi', '<p class="error">:message</p>') }}
							{{ Form::email('email', null, array('placeholder' => 'Email')) }}
							{{ $errors->first('email', '<p class="error">:message</p>') }}	
							{{ Form::number('dienthoai', null, array('placeholder' => 'Phone')) }}
							{{ $errors->first('dienthoai', '<p class="error">:message</p>') }}	
							{{ Form::number('fax', null, array('placeholder' => 'Fax')) }}
							{{ $errors->first('fax', '<p class="error">:message</p>') }}
							{{ Form::text('cty', null, array('placeholder' => 'Company')) }}
							{{ $errors->first('cty', '<p class="error">:message</p>') }}
							{{ Form::number('id', null, array('placeholder' => 'ID')) }}
							{{ $errors->first('id', '<p class="error">:message</p>') }}	
							{{ Form::number('soluong', null, array('placeholder' => 'Quantity')) }}
							{{ $errors->first('soluong', '<p class="error">:message</p>') }}		
							{{ Form::number('tongtien', null, array('placeholder' => 'Total')) }}
							{{ $errors->first('tongtien', '<p class="error">:message</p>') }}	
							{{ Form::text('tinhtrang', null, array('placeholder' => 'Status')) }}
							{{ $errors->first('tinhtrang', '<p class="error">:message</p>') }}	
	
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