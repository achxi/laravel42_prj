@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">id</td>
							<td class="description">id_loai</td>
							<td class="description">tensp</td>
							<td class="description">cauhinh</td>
							<td class="description">mota</td>
							<td class="price">Price (VNĐ)</td>
							<td class="total">id_menu</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($products)
						@foreach($products as $item)
							<tr>
								<td class="cart_product">
									<a href="{{ URL::route('default.user.show', $item->id) }}">{{ HTML::image("public/default/images/small/$item->hinh", $item->name)}}</a>
								</td>
								<td class="cart_description">
									<p> {{ $item->id }}</p>
								</td>
								<td class="cart_description">
									<p> {{ $item->id_loai }}</p>
								</td>		
								<td class="cart_description">
									<p> {{ $item->tensp }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->cauhinh }}</p>
								</td>
								<td class="cart_description">
									<p> mota </p>
								</td>
								<td class="cart_price">
									<p>{{ number_format($item->gia,0,'','.') }}</p>
								</td>							
								<td class="cart_total">
									<p>{{ $item->id_menu }}</p>
								</td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('DefaultUserController@cart_destroy', [$item->id]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">Your cart is empty!</div>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">CONTINUE SHOPPING</a>
							</td>
						</tr>
					@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop