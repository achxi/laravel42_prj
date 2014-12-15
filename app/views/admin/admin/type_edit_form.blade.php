@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Edit Product Type Info</h2>
						{{ Form::model($type, array('route' => 'admin.type_edit', 'method' => 'post')) }}
							{{ Form::number('id_nhom', null, array('placeholder' => 'Type ID')) }}
							{{ $errors->first('id_nhom', '<p class="error">:message</p>') }}	
							{{ Form::text('tennhom', null, array('placeholder' => 'Type Name')) }}
							{{ $errors->first('tennhom', '<p class="error">:message</p>') }}
	
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