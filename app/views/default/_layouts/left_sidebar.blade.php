<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			@if(count($types))
				@foreach($types as $type)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#{{ $type->tennhom }}">
								<span class="badge pull-right"><i class="fa fa-plus"></i></span>
								{{ $type->tennhom }}
							</a>
						</h4>
					</div>
					<div id="{{ $type->tennhom }}" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								@foreach($type->Loaisanpham as $group)
									@if($group->id_nhom == $type->id_nhom)
									 <li><a href="<?php echo URL::route('default.user.type', $group->id_loai); ?>"> {{ $group->tenloaisp }} </a></li>
									@endif
								@endforeach
							</ul>
						</div>
					</div>
				</div>	<!-- /.panel panel-default -->		
				@endforeach
			@endif

		</div><!--/category-products-->
		
		<div class="price-range"><!--price-range-->
			<h2>Price Range</h2>
			<div class="login-form"><!--login form-->
				<form action="{{ URL::route('default.user.price_range') }}" method="get">
					<input type="number" placeholder="Min value (VND)" name="minval" />
					{{ $errors->first('minval', '<p class="error">:message</p>') }}
					<input type="number" placeholder="max value (VND)" name="maxval" />
					{{ $errors->first('maxval', '<p class="error">:message</p>') }}
					<button type="submit" class="btn btn-default">Find</button>
				</form>
			</div><!--/login form-->
			
		</div><!--/price-range-->
		
		<div class="shipping text-center"><!--shipping-->
			{{ HTML::image('public/default/images/home/shipping.jpg', 'shipping') }}
		</div><!--/shipping-->
	</div>
</div>