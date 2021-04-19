@extends('layouts.nav')
<!DOCTYPE html>
<html lang="en-US" class="new-angle" data-class="new-angle">
	@section('navigation')
   
      <div class="pageWrapper  animsition"  data-animsition-in-class=fade-in  data-animsition-out-class=fade-out >
         
         <div id="contentWrapper">
            <div class="page-title title-1">
               <div class="title-overlay"></div>
               <div class="container">
                  <div class="row">
                     <div class="title-container">
                        <div class="f-left">
                           <h1 class="fx" data-animate="fadeInDown">Contact Us</h1>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
            <div class="section"  >
               <div class="container">
                  <div class="row vc_row">
                     <div class="col-md-6 contact-form-2">
                        <div class="heading side-head head-5 main-color">
                           <h4 class="main-color"  style="text-transform:uppercase;font-size:20px;font-weight:bold">Leave Us A Message</h4>
                        </div>
                        <div class="wpb_text_column wpb_content_element  sub-heading block" >
                           <div class="wpb_wrapper">
                              <p>Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
                           </div>
                        </div>
                        <div class="vc_empty_space"   style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                        <div role="form" class="wpcf7" id="wpcf7-f4-p5004-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p>
                              <ul></ul>
                           </div>
                           <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                             @csrf
                              <p>Your Full Name (required)<br />
                                 <span class="wpcf7-form-control-wrap your-name">
									 <input type="text" name="full_name" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> 
                              </p>
                              <p>Your Email (required)<br />
                                 <span class="wpcf7-form-control-wrap your-email">
									 <input type="email" name="email" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> 
                              </p>
                              <p>Contact<br />
                                 <span class="wpcf7-form-control-wrap your-subject">
								<input type="text" name="contact" required size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> 
                              </p>
                              <p>Your Message<br />
                                 <span class="wpcf7-form-control-wrap your-message">
					<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" required></textarea></span> 
                              </p>
                              <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
                              <div class="wpcf7-response-output" aria-hidden="true"></div>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="heading side-head head-5 main-color">
                           <h4 class="main-color"  style="text-transform:uppercase;font-size:20px;font-weight:bold">FIND US</h4>
                        </div>
                        <div class="wpb_text_column wpb_content_element  sub-heading block" >
                           <div class="wpb_wrapper">
                              <p>Let’s Create Unlimited Websites With this Fancy Huge HTML Template, With Endless possibilities and very easy Customization, What else do you need to create all your websites, it is completely complete one.</p>
                           </div>
                        </div>
                        <div class="vc_empty_space"   style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                        <div class="">
                           <script src="https://maps.googleapis.com/maps/api/js?key=&sensor=false" type="text/javascript"></script>
                           <div id="map_canvas1" style="height: 600px; width: 100%;">
                              <script type="text/javascript"> 
                                 function init_map(){
                                     var myOptions = {zoom:14,scrollwheel:false,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};
                                     
                                     map = new google.maps.Map(document.getElementById("map_canvas1"), myOptions);
                                     marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});
                                     infowindow = new google.maps.InfoWindow({content:"<div>Headquarter: 2880 Broadway New York</div>" });
                                     google.maps.event.addListener(marker, "click", function(){
                                         infowindow.open(map,marker);
                                     });
                                     infowindow.open(map,marker);
                                 }
                                 google.maps.event.addDomListener(window, "load", init_map);
                                 
                                 
                              </script>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section"   style="background-color: #f1f1f1;">
               <div class="container">
                  <div class="row vc_row">
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>Address</h4>
                                 <p>123, Second Sunrise Avenue<br />
                                    New York,USA
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>Phone</h4>
                                 <p>Phone: +2 012 000 0000<br />
                                    Mobile: +2 012 000 0000
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wpb_text_column wpb_content_element " >
                           <div class="wpb_wrapper">
                              <div class="white-bg lg-box shape">
                                 <h4>E-mail Address</h4>
                                 <p>info@it-rays.net<br />
                                    email@domain.com
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
        @include('layouts.footer')
         <span class="sufn_url hidden">http://www.it-rays.org/superfine/wp-content/themes/superfine</span>
		 <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
      </div>
	  @include('layouts.scripts')
   @include('layouts.scripts')
</html>
@endsection
