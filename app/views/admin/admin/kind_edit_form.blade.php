@section('cart')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="login-form kind_new"><!--login form-->
						<h2>Edit Product Kind Info</h2>
						{{ Form::model($kind, array('route' => 'admin.kind_edit', 'method' => 'post')) }}
							{{ Form::number('id_loai', null, array('placeholder' => 'Kind ID')) }}
							{{ $errors->first('id_loai', '<p class="error">:message</p>') }}	
							<select name="id_nhom">
								@foreach($types as $item)
									<option value="{{ $item->id_nhom }}" @if($kind->id_nhom == $item->id_nhom) {{ 'selected="selected"' }}  @endif>{{ $item->tennhom }}</option>
								@endforeach
							</select>
							{{ Form::text('tenloaisp', null, array('placeholder' => 'Kind Name')) }}
							{{ $errors->first('tenloaisp', '<p class="error">:message</p>') }}
	
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