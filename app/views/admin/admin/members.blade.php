@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">All Members</li>
				  @if(Session::has('notify'))
					<li class="error">{{ Session::get('notify') }}</li>
				  @endif
				</ol>
			</div>
			@if($members)
				<div class="col-sm-12">{{ $members->links() }}</div>
			@endif
			<div class="table-responsive cart_info">
				<table class="table table-bordered">
					<thead>
						<tr class="cart_menu">
							<td class="image">Fullname</td>
							<td class="description">Address</td>
							<td class="description">Email</td>
							<td class="description">Phone</td>
							<td class="description">User Name</td>
							<td class="description">Password</td>
							<td class="price">Previlege</td>
							<td class="total">Level</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td colspan="10" id="add_new"><a href="{{ URL::route('admin.member_new') }}">ADD NEW MEMBER</a></td>
					</tr>
					<form action="{{ URL::route('default.user.cart_update') }}" method="post">
						<?php $i=1;?>
					@if($members)
						@foreach($members as $item)
							<tr>
								<td class="cart_description">
									{{ $item->hoten }}
								</td>
								<td class="cart_description">
									<p> {{ $item->diachi }}</p>
								</td>
								<td class="cart_description">
									<p> {{ $item->email }}</p>
								</td>		
								<td class="cart_description">
									<p> {{ $item->dienthoai }}</p>
								</td>	
								<td class="cart_description">
									<p> {{ $item->user }}</p>
								</td>
								<td class="cart_description">
									<p> {{ substr($item->pass, 0, 10)."..." }} </p>
								</td>
								<td class="cart_price">
									<p>{{ $item->hieuluc }}</p>
								</td>							
								<td class="cart_total">
									<p>{{ $item->capquyen }}</p>
								</td>
								<td class="cart_description"><a href="{{ URL::action('AdminDefaultController@member_edit_form', [$item->user]) }}">Edit</a></td>
								<input type="hidden" name="{{ $i }}[id]" value="{{ $item->id }}">
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="{{ URL::action('AdminDefaultController@member_destroy', [$item->user]) }}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php $i++;?>
						@endforeach
					@else
						<tr>
							<td colspan="5">
								<div id="empty_cart">You currently don't have any member in database</div>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<a href="{{ URL::route('default.user.index') }}" class="btn btn-default update">ADD NEW MEMBER</a>
							</td>
						</tr>
					@endif

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop