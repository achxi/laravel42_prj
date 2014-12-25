@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('admin.index') }}">Home</a></li>
				  <li class="active">Admin Index</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>

		</div>
	</section> <!--/#cart_items-->


@stop