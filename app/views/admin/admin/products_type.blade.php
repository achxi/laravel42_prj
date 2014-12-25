@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('admin.index') }}">Home</a></li>
				  <li class="active">Products Type</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<tr class="cart_menu">
							<td class="image">id_nhom</td>
							<td class="description">tennhom</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="10" id="add_new"><a href="{{ URL::route('admin.type_new') }}">ADD NEW TYPE</a></td>
					</tr>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($types)
						@foreach($types as $item)
							<tr>
								<td class="cart_description">
									{{ $item->id_nhom }}
								</td>
								<td class="cart_description">
									<p> {{ $item->tennhom }}</p>
								</td>							
								<td class="cart_description"><a href="{{ URL::action('AdminDefaultController@type_edit_form', [$item->id_nhom]) }}">Edit</a></td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('AdminDefaultController@type_destroy', [$item->id_nhom]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">You currently don't have any type of product in database</div>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">ADD NEW TYPE</a>
							</td>
						</tr>
					@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop