@section('content')
	<h2 class="title text-center">Features Items</h2>
	@if(count($results))
		@foreach($results as $result)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
									<div class="productinfo text-center">
										{{ HTML::image("public/default/images/large/$result->hinh", "$result->tensp", array('class' => 'myimg')) }}
										<h2>{{ number_format($result->gia,0,'','.')." VNĐ" }}</h2>
										<p>{{ $result->tensp }}</p>
										<a href="{{ URL::route('default.user.show', [$result->id, Str::slug($result->tensp)]) }}" class='btn btn-default add-to-cart'>
										     <i class="fa fa-shopping-cart"></i>Add to cart
										</a>
									</div> <!-- /.productinfo text-center -->
									<div class="product-overlay">
										<div class="overlay-content">
											<h3>{{ $result->cauhinh }}</h3>
											<h2>{{ number_format($result->gia,0,'','.')." VNĐ" }}</h2>
											<p>{{ $result->tensp }}</p>
											<a href="{{ URL::route('default.user.show', [$result->id, Str::slug($result->tensp)]) }}" class='btn btn-default add-to-cart'>
										     <i class="fa fa-shopping-cart"></i>Add to cart
											</a>
										</div> <!-- /.overlay-content -->
									</div> <!-- /.product-overlay -->
									{{ HTML::image('public/default/images/home/new.png', 'sale', array('class' => 'new')) }}
							</div> <!-- /.single-products -->
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="{{ URL::route('default.user.wishlist_add', $result->id) }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div> <!-- /.choose -->
						</div> <!-- /.product-image-wrapper -->
					</div> <!-- /.col-sm-4 -->
		@endforeach
	@endif

	@unless(count($results))
		<div class="error"><p>Your search retuns no results.</p></div>
	@endunless

@stop