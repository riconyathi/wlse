@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
		    
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		<div class="page-title title-1">
						<div class="container">
							<div class="row">
								<h1>Women Leadership Social Empowerment Programmes</h1>
								<h3>

Be a leader with our various social empowerment programmes</h3>
								
								<div class="breadcrumbs">
									<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Blog Small Image</span>
								</div>
								
							</div>
						</div>
					</div>

					<div class="section gry-bg">
					
					<div class="heading full-heading main-bg">
						<h3 class="inner-head white">About <span class="heavy-font">SUPERFINE</span></h3>
						<h5 class="small-heading white"><span class="black-color">Checkout Our</span>Features</h5>
					</div>
					
					<div class="container">
						
						<p class="heading-desc centered">Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
						
						<div class="row">
							<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
								<figure class="shape lg new-angle">
									<img alt="" src="{{ asset('assets/images/portfolio/large/8.jpg') }}">
									<a href="#" class="shape new-angle"><span>+</span></a>
								</figure>
								<div class="feature-details2">
									<h4 class="bold feature-head2 uppercase t-center">Short courses</h4>
									<p class="t-center">Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed. </p>
								</div>
							</article>
							<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;">
								<figure class="shape lg new-angle">
									<img alt="" src="{{ asset('assets/images/portfolio/large/3.jpg') }}">
									<a href="#" class="shape new-angle"><span>+</span></a>
								</figure>
								<div class="feature-details2">
									<h4 class="bold feature-head2 uppercase t-center">IT Programmes</h4>
									<p class="t-center">Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed. </p>
								</div>
							</article>
							<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="600" style="animation-delay: 600ms;">
								<figure class="shape lg new-angle">
									<img alt="" src="{{ asset('assets/images/portfolio/large/9.jpg') }}">
									<a href="#" class="shape new-angle"><span>+</span></a>
								</figure>
								<div class="feature-details2">
									<h4 class="bold feature-head2 uppercase t-center">Skills-based Vocational and Technical Programme (VET))</h4>
									<p class="t-center">Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed. </p>
								</div>
							</article>
							<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
								<figure class="shape lg new-angle">
									<img alt="" src="{{ asset('assets/images/portfolio/large/8.jpg') }}">
									<a href="#" class="shape new-angle"><span>+</span></a>
								</figure>
								<div class="feature-details2">
									<h4 class="bold feature-head2 uppercase t-center">Enterprise Development and Training support</h4>
									<p class="t-center">Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed. </p>
								</div>
							</article>
							<article class="fx col-md-4 feature-img2 animated fadeInUp" data-animate="fadeInUp" data-animation-delay="400" style="animation-delay: 400ms;">
								<figure class="shape lg new-angle">
									<img alt="" src="{{ asset('assets/images/portfolio/large/3.jpg') }}">
									<a href="#" class="shape new-angle"><span>+</span></a>
								</figure>
								<div class="feature-details2">
									<h4 class="bold feature-head2 uppercase t-center">Gender Based Violence Program</h4>
									<p class="t-center">Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed. </p>
								</div>
							</article>
						</div>
					</div>
				</div>
					

					
					
					
			    </div>			    
		    	
				@include('layouts.footer')
		    </div>
		</div>
				
	
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
		@include('layouts.scripts')
		
	</body>


</html>
@endsection