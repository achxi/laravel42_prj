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
					<div class="btn-group pull-right">
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								USA
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">Canada</a></li>
								<li><a href="#">UK</a></li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								DOLLAR
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">Canadian Dollar</a></li>
								<li><a href="#">Pound</a></li>
							</ul>
						</div>
							@if(Session::has('flash_mess'))
								<div class="welcome">{{ Session::get('flash_mess') }}</div>
							@endif
					</div>
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							@if(Auth::check())
								<li><a href="{{ URL::route('default.user.account') }}"><i class="fa fa-user"></i> Account</a></li>
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

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="{{ URL::route('default.user.index') }}" class="active">Home</a></li>
							<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::route('default.user.index') }}">Products</a></li>
									<li><a href="{{ URL::route('default.user.checkout') }}">Checkout</a></li> 
									<li><a href="{{ URL::route('default.user.cart') }}">Cart</a></li>
									@if(Auth::check())
									<li><a href="{{ URL::route('default.user.logout') }}">Logout</a></li>	
									@else
									<li><a href="{{ URL::route('default.user.login') }}">Login</a></li> 
									@endif 
                                </ul>
                            </li> 
							<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
									<li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> 
							<li><a href="{{ URL::route('default.user.page_404') }}">404</a></li>
							<li><a href="{{ URL::route('default.user.contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="search_box pull-right">
						<form action="{{ URL::route('default.user.search') }}" method="post" id="search_form">
							<input type="text" name="str" placeholder="Search" id="str" />
							<input value="Search" type="hidden" name="search" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->