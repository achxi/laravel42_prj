@section('cart')
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.615722387872!2d106.74388957807929!3d10.84069147765828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527b80b9d8219%3A0x14e31ae6baeeb8dc!2zNjI0IEtoYSBW4bqhbiBDw6Ju!5e0!3m2!1svi!2s!4v1411656593458" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Achxi Laptop.</p>
							<p>12/1 42 Street, Kha Van Can, Linh Dong Ward, Thu Duc District</p>
							<p>Ho Chi Minh City</p>
							<p>Mobile: 0122 6300 2565</p>
							<p>Email: achxi88@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="http://facebook.com/huynhtanloc"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://facebook.com/huynhtanloc"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://facebook.com/huynhtanloc"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="http://facebook.com/huynhtanloc"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

@stop