@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('admin.index') }}">Home</a></li>
				  <li class="active">Bill</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<tr class="cart_menu">
							<td class="image">id_hoadon</td>
							<td class="description">hoten</td>
							<td class="description">diachi</td>
							<td class="description">email</td>
							<td class="description">dienthoai</td>
							<td class="description">fax</td>
							<td class="description">cty</td>
							<td class="description">id</td>
							<td class="description">soluong</td>
							<td class="description">tongtien</td>
							<td class="description">tinhtrang</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="13" id="add_new"><a href="{{ URL::route('admin.bill_new') }}">ADD NEW BILL</a></td>
					</tr>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($bills)
						@foreach($bills as $item)
							<tr>
								<td cbillslass="cart_description">
									{{ $item->id_hoadon }}
								</td>
								<td class="cart_description">
									<p> {{ $item->hoten }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->diachi }}</p>
								</td>
								<td class="cart_description">
									<p> {{ $item->email }}</p>
								</td>
								<td class="cart_description">
									<p> {{ $item->dienthoai }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->fax }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->cty }}</p>
								</td>		
								<td class="cart_description">
									<p> {{ $item->id }}</p>
								</td>		
								<td class="cart_description">
									<p> {{ $item->soluong }}</p>
								</td>
								<td class="cart_description">
									<p> {{ $item->tongtien }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->tinhtrang }}</p>
								</td>															

								<td class="cart_description"><a href="{{ URL::action('AdminDefaultController@bill_edit_form', [$item->id_hoadon]) }}">Edit</a></td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('AdminDefaultController@bill_destroy', [$item->id_hoadon]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">You currently don't have any bill in database</div>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">ADD NEW BILL</a>
							</td>
						</tr>
					@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop