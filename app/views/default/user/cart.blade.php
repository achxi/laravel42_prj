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
							<td class="description"></td>
							<td class="price">Price (VNĐ)</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total (VNĐ)</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($carts)
						@foreach($carts as $cart)
							<tr>
								<td class="cart_product">
									<a href="{{ URL::route('default.user.show', [$cart->id, Str::slug($cart->name)]) }}">{{ HTML::image("public/default/images/small/$cart->hinh", $cart->name)}}</a>
								</td>
								<td class="cart_description">
									<h4><a href="">{{ $cart->name }}</a></h4>
									<p>ID: {{ $cart->id }}</p>
								</td>
								<td class="cart_price">
									<p>{{ number_format($cart->price,0,'','.') }}</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="{{ $i }}[quantity]" value={{ $cart->quantity }} autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									</div>
									{{ $errors->first("quantity ".$i, '<div class="error">:message</div>') }}

								</td>
								<td class="cart_total">
									<p class="cart_total_price">{{ number_format($cart->total(),0,'','.') }}</p>
								</td>
									<input type="hidden" name="{{ $i }}[id]" value="{{ $cart->id }}">
									<td class="cart_delete">
										<a class="cart_quantity_delete" href="{{ URL::action('DefaultUserController@cart_destroy', [$cart->id]) }}"><i class="fa fa-times"></i></a>
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

	@if($carts)
		<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{ number_format(Cart::total(),0,'','.') }}</span></li>
							<li>Eco Tax <span>0</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{ number_format(Cart::total(),0,'','.') }}</span></li>
						</ul>
							<button type="submit" class="btn btn-default update">Update</button>
							<a class="btn btn-default check_out" href="{{ URL::route('default.user.checkout') }}">Check Out</a>
					</div>
				</div>	
			</form>		
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>

			</div>
		</div>
	</section><!--/#do_action-->
	@endif


@stop