	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Achxi</span>-shop</h2>
							<p>Best laptop shop in the world</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										{{ HTML::image('public/default/images/home/iframe1.png', 'iframe1') }}
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										{{ HTML::image('public/default/images/home/iframe2.png', 'iframe2') }}
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										{{ HTML::image('public/default/images/home/iframe3.png', 'iframe3') }}
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										{{ HTML::image('public/default/images/home/iframe4.png', 'iframe4') }}
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							{{ HTML::image('public/default/images/home/map.png', 'map') }}
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Services</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{ URL::route('default.user.contact') }}">Contact Us</a></li>
								<li><a href="{{ URL::route('default.user.checkout') }}">Checkout</a></li>
								<li><a href="{{ URL::route('default.user.cart') }}">Cart status</a></li>
								<li><a href="{{ URL::route('default.user.faq') }}">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Brands</h2>
							<ul class="nav nav-pills nav-stacked">
								@if(count($types))
									@foreach($types as $type)
											@foreach($type->Loaisanpham as $item)
												@if($item->id_nhom == 1)
										<li><a href="{{ URL::route('default.user.type', $item->id_loai) }}">{{ $item->tenloaisp }}</a></li>
												@endif
											@endforeach
									@endforeach
								@endif
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Accessories</h2>
							<ul class="nav nav-pills nav-stacked">
								@if(count($types))
									@foreach($types as $type)
											@foreach($type->Loaisanpham as $item)
												@if($item->id_nhom == 2)
										<li><a href="{{ URL::route('default.user.type', $item->id_loai) }}">{{ $item->tenloaisp }}</a></li>
												@endif
											@endforeach
									@endforeach
								@endif
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Achxi-Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{ URL::route('default.user.company_info') }}">Company Information</a></li>
								<li><a href="{{ URL::route('default.user.career') }}">Careers</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>follow us</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 ACHXI-SHOP Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->