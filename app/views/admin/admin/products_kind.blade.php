@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Products Kind</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<tr class="cart_menu">
							<td class="image">id_loai</td>
							<td class="description">id_nhom</td>
							<td class="description">tenloaisp</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="10" id="add_new"><a href="{{ URL::route('admin.kind_new') }}">ADD NEW KIND</a></td>
					</tr>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($kinds)
						@foreach($kinds as $item)
							<tr>
								<td class="cart_description">
									{{ $item->id_loai }}
								</td>
								<td class="cart_description">
									<p> {{ $item->id_nhom }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->tenloaisp }}</p>
								</td>														
								<td class="cart_description"><a href="{{ URL::action('AdminDefaultController@kind_edit_form', [$item->id_loai]) }}">Edit</a></td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('AdminDefaultController@kind_destroy', [$item->id_loai]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">You currently don't have any kind of product in database</div>
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