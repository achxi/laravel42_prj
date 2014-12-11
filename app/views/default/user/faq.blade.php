@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Frequently Asked Question</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed faq_table">
					<thead>
						<tr class="cart_menu">
							<td class="faq">Frequently Asked Question</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#faq1">How long does a Dell laptop battery last? When should I consider replacing mine?</a></td>
						</tr>
						<tr>							
							<td><a href="#faq2">How should I choose between two batteries with different Watt hours (Whr) available on one system?</a></td>
						</tr>
						<tr>
							<td><a href="#faq3">How long am I able to use my Dell laptop on a fully charged battery?</a></td>
						</tr>
						<tr>
							<td><a href="#faq4">How do I charge my Dell laptop battery?</a></td>
						</tr>
						<tr>
							<td><a href="#faq5">How long does it take for a Dell laptop battery to fully recharge?</a></td>
						</tr>
						<tr>
							<td>
								<a name="faq1"><i class="fa fa-star"></i></a> 
								All rechargeable batteries wear out with time and usage. As time and cumulative use increase, the performance will degrade. For the typical user, noticeable reduction in run time generally will be observed after 18 to 24 months. For a power user, reduction in run time generally may be experienced prior to 18 months. We recommend buying a new Dell laptop battery when the run time does not meet your needs.
							</td>
						</tr>	
						<tr>
							<td>
								<a name="faq2"><i class="fa fa-star"></i></a> 
								Higher Watt hours (Whr) on the same system under the same operating conditions will generally deliver longer battery run time. For example, if you compare the same system, running the same applications, the 53Whr battery would provide approximately 65% more run time than the 32Whr battery.
							</td>
						</tr>	
						<tr>
							<td>
								<a name="faq3"><i class="fa fa-star"></i></a> 
								Many factors affect the amount of time that a portable computer battery can deliver power before it must be recharged. These factors include the configuration (processor, memory, etc.), types of applications being run and display brightness.

Dell uses industry standard benchmarks for battery run time claims. For more information on battery run times and benchmarks, the white paper, "Understanding Battery Life in Portable Computers"
							</td>
						</tr>	
						<tr>
							<td>
								<a name="faq4"><i class="fa fa-star"></i></a> 
								The battery charges in the laptop when the laptop is connected to an AC power source via the AC adapter.
							</td>
						</tr>		
						<tr>
							<td>
								<a name="faq5"><i class="fa fa-star"></i></a> 
								The charge time varies depending on the system. If the system supports ExpressChargeTM , the battery typically will have greater than 80% charge after about an hour of charging, and fully charge in about 2 hours with the system off.
							</td>
						</tr>																										
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop