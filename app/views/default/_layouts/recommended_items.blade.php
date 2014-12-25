<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">recommended items</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php $i = 0;?>

				@foreach($rands as $item)
					@unless($i%3)
						<div class="item <?php if($i == 0) echo 'active';?>">
					@endunless
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center recommended_img">
									{{ HTML::image("public/default/images/small/$item->hinh", $item->tensp) }}
									<h2>{{ number_format($item->gia,0,'','.').' VND' }}</h2>
									<p>{{ $item->tensp }}</p>
									<a href="{{ URL::route('default.user.show', [$item->id, Str::slug($item->tensp)]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</div>
						</div>
					</div>
					<?php $i++;?>
					@unless($i%3)
						</div>		
					@endunless
				@endforeach


		</div>
		 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		  </a>			
	</div>
</div><!--/recommended_items-->