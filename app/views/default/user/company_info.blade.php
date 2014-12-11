@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Company Info</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed faq_table">
					<thead>
						<tr class="cart_menu">
							<td class="faq">Company Info </td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<b>"Growing Together" is the foundation of our company, where we work with our employees, customers, and partners to create an outstanding collaboration. As a mature company, we have faced many challenges and difficulties over the years, but we have built a strong foundation of experts to enable our company and stakeholders to pursue our goals and prosper in a competitive market.</b>
							</td>
						</tr>
						<tr>							
							<td>
								OUR MISSIONS
							</td>
						</tr>
						<tr>
							<td>
								To be a leader of innovation in the Vietnam software Industry to promote software development competency of Vietnam in the global market <br/>
								To be the best in class value service provider for our stakeholders <br/>
								To deliver the best services and satisfactions to employees, customers and partners <br/>
								To enable our partners to enhance their business and social value through the use of information technology
							</td>
						</tr>
						<tr>							
							<td>
								OUR VALUES
							</td>
						</tr>	
						<tr>
							<td>REQUIREMENTS</td>
						</tr>					
						<tr>
							<td>
								Client centric and client focused <br/>
								Honesty and Integrity <br/>
								Commitment to results and predictable delivery <br/>
								Dedication to quality and pride in work <br/>
								Innovative and change leaders focused on business and social development <br/>
								Respect for the individual and continuous investment in our own human resources
							</td>
						</tr>
						<tr>
							<td>
								SECURITY AND PRIVACY POLICY
							</td>
						</tr>
						<tr>
							<td>
								We do not disclose any personal or business information concerning our clients and partners via well-defined security policies and training <br/>
								All of our projects and information are insured by our insurance partner <br/>
								We guarantee our clients security and safety of source code that we deliver on each stage of software development project.
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


@stop