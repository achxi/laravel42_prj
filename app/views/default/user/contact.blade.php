@section('cart')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{ URL::route('default.user.index') }}">Home</a></li>
				  <li class="active">Contact Us</li>
				</ol>
			</div>
			<div id="contentPro">	
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title myPanel">CONTACT FORM</h3>
				  </div>
				  <div class="panel-body">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.615722387872!2d106.74388957807929!3d10.84069147765828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527b80b9d8219%3A0x14e31ae6baeeb8dc!2zNjI0IEtoYSBW4bqhbiBDw6Ju!5e0!3m2!1svi!2s!4v1411656593458" width="100%" height="600" frameborder="0" style="border:0"></iframe>	
					<p>Thank you for your time visiting our store. Feel free to contact us.</p>
					<p>Our supporter will receive your message as soon as possible, and we are going to contact you in around 15 mins.</p>
				  	<form action="" method="post">
				        <div class="input-group contact-form">
						    <span class="input-group-addon">Full name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    <input type="text" class="form-control" placeholder="Your Full name..." name="fullname">
						</div> <!-- /.input-group -->						
				        <div class="input-group contact-form">
						    <span class="input-group-addon">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    <input type="email" class="form-control" placeholder="Your Email..." name="email">
						</div> <!-- /.input-group -->	
				        <div class="input-group contact-form">
						    <span class="input-group-addon">Phone number</span>
						    <input type="number" class="form-control" placeholder="Your Phone Number..." name="phone">
						</div> <!-- /.input-group -->							    
				        <div class="input-group">
						    <span class="input-group-addon contact-form">Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    <textarea class="form-control" placeholder="Your Message..." name="msg" row="5"></textarea>
						</div> <!-- /.input-group -->							    
						<input class="btn btn-warning pull-right contact-form" type="submit" id="register_btn" name="send_contact" value="SEND MESSAGE"/>	
					</form>
				  </div> <!-- ./panel-body -->
				</div> <!-- /.panel -->
			</div> <!-- /.contentPro -->
		</div>
	</section> <!--/#cart_items-->

@stop