<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> 0122 6300 265</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> achxi88@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="http://facebook.com/huynhtanloc"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://facebook.com/huynhtanloc"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://facebook.com/huynhtanloc"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="http://facebook.com/huynhtanloc"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="http://facebook.com/huynhtanloc"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->
	
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="{{ URL::route('default.user.index') }}">{{ HTML::image('public/default/images/logo_cat.jpg') }}</a>
					</div>

				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							@if(Auth::check())
								<li><a href="{{ URL::route('admin.products') }}"><i class="fa fa-user"></i> Products</a></li>
							@else
								<li><a href="{{ URL::route('default.user.register') }}"><i class="fa fa-user"></i> Register</a></li>
							@endif
							<li><a href="{{ URL::route('default.user.wishlist') }}"><i class="fa fa-star"></i> Wishlist</a></li>
							<li><a href="{{ URL::route('default.user.checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
							<li><a href="{{ URL::route('default.user.cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							@if(Auth::check())
								<li><a href="{{ URL::route('default.user.logout') }}"><i class="fa fa-user"></i>{{ Auth::user()->user }} (logout)</a></li>
							@else
								<li><a href="{{ URL::route('default.user.login') }}"><i class="fa fa-lock"></i> Login</a></li>
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

</header><!--/header-->