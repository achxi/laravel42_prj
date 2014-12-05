@section('cart')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
		@unless(Cart::contents())
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td colspan="6">Checkout</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5">
									<div id="empty_cart">You cannot checkout right now</div>
									<div id="empty_cart">Your cart is empty!</div>
								</td>
							</tr>
							<tr>
								<td colspan="5">
									<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">CONTINUE SHOPPING</a>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
		@else
			@unless(Auth::check())
				<div class="step-one">
					<h2 class="heading">Step1</h2>
				</div>
				<div class="checkout-options">
					<h3>New User</h3>
					<p>Checkout options</p>
					<ul class="nav">
						<li>
							<label><input type="checkbox"> Register Account</label>
						</li>
						<li>
							<label><input type="checkbox"> Guest Checkout</label>
						</li>
						<li>
							<a href=""><i class="fa fa-times"></i>Cancel</a>
						</li>
					</ul>
				</div><!--/checkout-options-->

				<div class="register-req">
					<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
				</div><!--/register-req-->
			@endunless
			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Display Name" value="{{{ isset(Auth::user()->hoten) ? Auth::user()->hoten : ''}}}">
								<input type="text" placeholder="User Name" value="{{{ isset(Auth::user()->user) ? Auth::user()->user : ''}}}">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Company Name">
									<input type="text" placeholder="Email*" value="{{{ isset(Auth::user()->email) ? Auth::user()->email : ''}}}">
									<input type="text" placeholder="Address 1 *" value="{{{ isset(Auth::user()->diachi) ? Auth::user()->diachi : ''}}}">
									<input type="text" placeholder="Address 2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<input type="text" placeholder="Zip / Postal Code *">
									<select>
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<select>
										<option>-- State / Province / Region --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<input type="text" placeholder="Phone *" value="{{{ isset(Auth::user()->dienthoai) ? Auth::user()->dienthoai : ''}}}">
									<input type="text" placeholder="Fax">
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label>
						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price (VND)</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total (VND)</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach(Cart::contents() as $cart)
						<tr>
							<td class="cart_product">
								<a href="">{{ HTML::image("public/default/images/small/$cart->hinh", $cart->name)}}</a>
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
									<input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{ number_format($cart->total(),0,'','.') }}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{ URL::action('DefaultUserController@cart_destroy', [$cart->id]) }}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					@endforeach
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>{{ number_format(Cart::total(),0,'','.') }}</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>0</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>{{ number_format(Cart::total(),0,'','.') }}</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
	@endunless
		</div>
	</section> <!--/#cart_items-->

@stop