<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>ACHXI</span>-SHOP</h1>
								<h2>Best Laptop Shop In The World</h2>
								<p>We still offer the same great products at unbelievable prices. So no worries there. </p>
								<a type="button" class="btn btn-default get" href="{{ URL::route('default.user.show', 9)}}">Get it now</a>
							</div>
							<div class="col-sm-6">
								{{ HTML::image('public/default/images/large/SamsungNP535U3X.jpg', 'SamsungNP535U3X', array('class' => 'girl img-responsive')) }}
								{{ HTML::image('public/default/images/home/pricing.png', 'pricing', array('class' => 'pricing')) }}
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>ACHXI</span>-SHOP</h1>
								<h2>Best Laptop Shop In The World</h2>
								<p>Check out the ultra-quick performance of an Ultrabook, a stylish and dependable MacBook, or get both a tablet and laptop in one with a convertible laptop. Conquer with powerful gaming laptops or go sleek and simple with a cloud-based Chromebook.</p>
								<a type="button" class="btn btn-default get" href="{{ URL::route('default.user.show', 20)}}">Get it now</a>
							</div>
							<div class="col-sm-6">
								{{ HTML::image('public/default/images/large/S200E.jpg', 'S200E', array('class' => 'girl img-responsive')) }}
								{{ HTML::image('public/default/images/home/pricing.png', 'pricing', array('class' => 'pricing')) }}
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-6">
								<h1><span>ACHXI</span>-SHOP</h1>
								<h2>Best Laptop Shop In The World</h2>
								<p>From transformer touchscreens to trusty MacBooks, our selection of laptops is filled with all the latest models from leading tech brands like Samsung, Apple, Lenovo and Acer. </p>
								<a type="button" class="btn btn-default get" href="{{ URL::route('default.user.show', 26)}}">Get it now</a>
							</div>
							<div class="col-sm-6">
								{{ HTML::image('public/default/images/large/LENOVOS400.jpg', 'LENOVOS400', array('class' => 'girl img-responsive')) }}
								{{ HTML::image('public/default/images/home/pricing.png', 'pricing', array('class' => 'pricing')) }}
							</div>
						</div>
						
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->