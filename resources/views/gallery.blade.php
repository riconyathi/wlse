@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		
				<div class="section">
					
					<div class="heading full-heading alter-gry" style="background-image:url('{{ asset('assets/images/patterns/bg2.jpg') }}')">
						<h3 class="inner-head">Our <span class="main-color heavy-font">Galary</span></h3>
						<h5 class="small-heading"><span class="main-color">Some Of </span>Our Work</h5>
					</div>
		
					<div class="container">
						
						<p class="heading-desc centered">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum</p>
						
						<div class="filter-by">
							<ul id="filters">
                                <li class="active shape new-angle"><a href="#" class="filter" data-filter="*">All</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".design">
Short Courses</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".develop">
IT Programmes</a></li>
                                <li class="shape new-angle"><a href="#" class="filter" data-filter=".computers">
Skills-Based VET</a></li>
                            </ul>
						</div>
						
						<div class="portfolio masonry p-3-cols p-style5" id="masonry" style="position: relative; height: 782.062px;">
							
							<div class="portfolio-item design" style="position: absolute; left: 0px; top: 0px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/1.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/1.jpg') }}" class="zoom shape new-angle" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Quality Products for Companies</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 0px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/2.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/2.jpg') }}" class="zoom shape new-angle" title="Nature vs. Man"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Nature vs. Man</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item computers" style="position: absolute; left: 759px; top: 0px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/3.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/3.jpg') }}" class="zoom shape new-angle" title="A Day with Sunshine &amp; Bliss"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">A Day with Sunshine &amp; Bliss</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 260px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/4.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/4.jpg') }}" class="zoom shape new-angle" title="A Workplace for Champions"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">A Workplace for Champions</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item design" style="position: absolute; left: 759px; top: 313px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/5.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link shape new-angle"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/5.jpg') }}" class="zoom shape new-angle" title="Doing it the Chilled Way"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Doing it the Chilled Way</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item computers" style="position: absolute; left: 0px; top: 468px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/6.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/6.jpg') }}" class="zoom shape new-angle" title="Take a Ride in a Luxury Car"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">Take a Ride in a Luxury Car</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
							<div class="portfolio-item develop" style="position: absolute; left: 379px; top: 521px;">
								<figure>
									<img alt="" src="{{ asset('assets/images/portfolio/masonry/7.jpg') }}">
									<figcaption>
										<div class="icon-links">
											<p>
												<a href="portfolio-single.html" class="link shape new-angle"><i class="fa fa-link"></i></a>
												<a href="{{ asset('assets/images/portfolio/masonry/7.jpg') }}" class="zoom shape new-angle" title="The Long Way to the Top"><i class="fa fa-search-plus"></i></a>
												<a class="fav shape new-angle" href="#"><i class="fa fa-heart"></i></a>
											</p>
										</div>
										<h4><a href="portfolio-single.html">The Long Way to the Top</a></h4>
										<p class="description main-bg shape new-angle"><a href="#">Design</a>, <a href="#">Development</a></p>
									</figcaption>			
								</figure>
							</div>
						</div>
						
					</div>
							
				</div>

					
					
					
			    </div>			    
		    	
				@include('layouts.footer')
		    </div>
		</div>

		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
	    	    <!-- Load JS plugins file -->
				@include('layouts.scripts')
		
	</body>


</html>
@endsection