@section('content')
	<h2 class="title text-center">Price Range Items</h2>
	@if(count($products))
		<div class="col-sm-12">{{ $products->appends(array('minval' => $minval, 'maxval' => $maxval))->links() }}</div>
		@foreach($products as $product)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
									<div class="productinfo text-center">
										{{ HTML::image("public/default/images/large/$product->hinh", "$product->tensp", array('class' => 'myimg')) }}
										<h2>{{ number_format($product->gia,0,'','.')." VNĐ" }}</h2>
										<p>{{ $product->tensp }}</p>
										<a href="{{ URL::route('default.user.show', [$product->id, Str::slug($product->tensp)]) }}" class='btn btn-default add-to-cart'>
										     <i class="fa fa-shopping-cart"></i>Add to cart
										</a>
									</div> <!-- /.productinfo text-center -->
									<div class="product-overlay">
										<div class="overlay-content">
											<h3>{{ $product->cauhinh }}</h3>
											<h2>{{ number_format($product->gia,0,'','.')." VNĐ" }}</h2>
											<p>{{ $product->tensp }}</p>
											<a href="{{ URL::route('default.user.show', [$product->id, Str::slug($product->tensp)]) }}" class='btn btn-default add-to-cart'>
										     <i class="fa fa-shopping-cart"></i>Add to cart
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.product-overlay -->
									{{ HTML::image('public/default/images/home/new.png', 'sale', array('class' => 'new')) }}
							</div> <!-- /.single-products -->
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="{{ URL::route('default.user.wishlist_add', $product->id) }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="{{ URL::route('default.user.compare_add', $product->id) }}"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div> <!-- /.choose -->
						</div> <!-- /.product-image-wrapper -->
					</div> <!-- /.col-sm-4 -->
		@endforeach
	@else
		<div class="error"><p>Your search retuns no results.</p></div>
	@endif

@stop