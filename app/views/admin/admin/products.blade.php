@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('admin.index') }}">Home</a></li>
				  <li class="active">All Products</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>
			@if($products)
				<div class="col-sm-12">{{ $products->links() }}</div>
			@endif
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">ID</td>
							<td class="description">Type ID</td>
							<td class="description">Product Name</td>
							<td class="description">Specification</td>
							<td class="description">Describe</td>
							<td class="price">Price (VNĐ)</td>
							<td class="total">Menu ID</td>
							<td>Edit</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="10" id="add_new"><a href="{{ URL::route('admin.product_add') }}">ADD NEW PRODUCT</a></td>
					</tr>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($products)
						@foreach($products as $item)
							<tr>
								<td class="cart_description">
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
								<td><a href="">Edit</a></td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('AdminDefaultController@product_destroy', [$item->id]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">You currently don't have any product in database</div>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">ADD PRODUCT</a>
							</td>
						</tr>
					@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop