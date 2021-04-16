@extends('layouts.nav')

<!DOCTYPE html>
<html>


	
			
	@section('navigation')
		    
	    	
		    
		    <div id="contentWrapper">
		    
		    	<div class="pageContent">
		    		<div class="page-title title-1">
						<div class="container">
							<div class="row">
								<h1>Blog Small Image</h1>
								<h3>This is sub heading text to describe the page functionality</h3>
								
								<div class="breadcrumbs">
									<a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><span>Blog Small Image</span>
								</div>
								
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-9">
									<div class="blog-posts small-image">
				                		<div class="post-item">
											<div class="post-image">
												<a href="blog-single.html">
													<img src="assets/images/blog/small/1.jpg" alt="Our Blog post image goes here">
												</a>
											</div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-book post-icon"></i>
														<h2><a href="blog-single.html">Blog post title with Image</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
										    	<div class="bottom_tools">
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i> 10</a>
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i> 30</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
										
										<div class="post-item">
											<div class="post-image">
												<iframe src="http://player.vimeo.com/video/69370726?title=0&amp;byline=0&amp;portrait=0;api=1" style="width:100%;height:250px"></iframe>
											</div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-video-camera post-icon"></i>
														<h2><a href="blog-single.html">Blog Post with External Video</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
												<div class="bottom_tools">
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i>2</a>
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i>15</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
										
										<div class="post-item">
											<div class="post-image">
												<video poster="{{ asset('assets/images/videos/girls_cover.jpg') }}" controls="">
								                    <source src="{{ asset('assets/images/videos/girls.mp4') }}" type="video/mp4">
								                    <source src="{{ asset('assets/images/videos/girls.html') }}" type="video/webm">
								                </video>
											</div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-video-camera post-icon"></i>
														<h2><a href="blog-single.html">Blog Post with Self Hosted Video</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
												<div class="bottom_tools">
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i>2</a>
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i>15</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
										
										<div class="post-item">
											<div class="post-image">
												<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/155621069&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" style="width:100%;height:250px"></iframe>
											</div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-soundcloud post-icon"></i>
														<h2><a href="blog-single.html">Blog post with Sound</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
												<div class="bottom_tools">
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i> 0</a>
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i> 24</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
										
										<div class="post-item">
											<div class="post-image posts-gal slick-initialized slick-slider">
												<div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 1300px; transform: translate3d(-260px, 0px, 0px);"><div class="slick-slide slick-cloned" index="-1" style="width: 260px;">
													<img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt="Our Blog post image goes here">
												</div><div class="slick-slide slick-active" index="0" style="width: 260px;">
													<img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt="Our Blog post image goes here">
												</div><div class="slick-slide" index="1" style="width: 260px;">
													<img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt="Our Blog post image goes here">
												</div><div class="slick-slide" index="2" style="width: 260px;">
													<img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt="Our Blog post image goes here">
												</div><div class="slick-slide slick-cloned" index="3" style="width: 260px;">
													<img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt="Our Blog post image goes here">
												</div></div></div>
												
												
											<ul class="slick-dots" style="display: table;"><li class="slick-active"><button type="button" data-role="none">1</button></li><li><button type="button" data-role="none">2</button></li><li><button type="button" data-role="none">3</button></li></ul></div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-camera post-icon"></i>
														<h2><a href="blog-single.html">Blog post with Gallery</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
												<div class="bottom_tools">
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i> 0</a>
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i> 24</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
										
										<div class="post-item">
										    <div class="post-gallery">
												<ul class="gallery gallery-columns-5 gallery-size-thumbnail ">
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
													<li class="gallery-item">
														<figure class="gallery-icon">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt=""></a>
														</figure>
														<p class="gallery-caption">this is a test caption image for the post gallery image </p>
													</li>
												</ul>
											</div>
										    <article class="post-content">
										        <div class="post-info-container">
													<div class="post-info">
														<i class="fa fa-camera post-icon"></i>
														<h2><a href="blog-single.html">Blog post Gallery with Tiled Images</a></h2>
														<ul class="post-meta">
															<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
															<li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
															<li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
														</ul>
													</div>
												</div>
												<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.  </p>
												<div class="bottom_tools">
											    	<a class="meta_love f-left shape new-angle" href="#"><i class="fa fa-heart"></i>1</a>
											    	<a class="meta_comments f-left shape new-angle" href="blog-single.html#comments"><i class="fa fa-comments"></i>33</a>
											    	<a class="f-right more_btn shape new-angle" href="blog-single.html">Read more</a>
											    </div>
										    </article>
										</div>
				                	</div>
				                	<div class="pagination">
										<ul>
											<li class="shape new-angle"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
											<li class="shape selected new-angle"><a href="#">1</a></li>
											<li class="shape new-angle"><a href="#">2</a></li>
											<li class="shape new-angle"><a href="#">3</a></li>
											<li class="shape new-angle"><a href="#">4</a></li>
											<li class="shape new-angle"><a href="#">5</a></li>
											<li class="shape new-angle"><a href="#">6</a></li>
											<li class="shape new-angle"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
						    	</div>
								<aside class="col-md-3">
									<ul class="sidebar_widgets">
										<li class="widget search-widget shape new-angle">
											<h4 class="widget-head"><span class="main-color">Blog</span> Search</h4>
											<div class="widget-content">
												<form action="#" method="get">
											    	<input type="text" name="t" id="t2-search" class="txt-box" placeholder="Enter search keyword...">
											    	<button type="submit" class="main-color"><i class="fa fa-search"></i></button>
												</form>
											</div>
										</li>
										
										<li class="widget w-recent-posts shape new-angle">
											<h4 class="widget-head"><span class="main-color">Recent </span>Posts</h4>
											<div class="widget-content">
												<ul>
													<li>
														<div class="post-img">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt=""></a>
														</div>
														<div class="widget-post-info">
															<h5><a href="blog-single.html">Blog post title with Image</a></h5>
															<div class="meta">
																<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
															</div>
														</div>
													</li>
													<li>
														<div class="post-img">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt=""></a>
														</div>
														<div class="widget-post-info">
															<h5><a href="blog-single.html">Blog post title</a></h5>
															<div class="meta">
																<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
															</div>
														</div>
													</li>
													<li>
														<div class="post-img">
															<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt=""></a>
														</div>
														<div class="widget-post-info">
															<h5><a href="blog-single.html">Blog post title with Image</a></h5>
															<div class="meta">
																<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</li>
										
										<li class="widget widget-categories shape new-angle">
											<h4 class="widget-head"><span class="main-color">Blog</span> Categories</h4>
											<div class="widget-content">
												<ul>
													<li><a href="blog-single.html">Corporate news</a><span>[12]</span></li>
													<li><a href="blog-single.html">Information technology</a><span>[5]</span></li>
													<li><a href="blog-single.html">Web development</a><span>[3]</span></li>
													<li><a href="blog-single.html">Sports News</a><span>[25]</span></li>
												</ul>
											</div>
										</li>
										
										<li class="widget w-recent-comments shape new-angle">
											<h4 class="widget-head"><span class="main-color">Recent</span> Comments</h4>
											<div class="widget-content">
												<ul>
													<li>
														<div class="f-left"><i class="fa fa-comments"></i></div>
														<h5><strong>admin on</strong> <a href="blog-single.html">Blog Post with Video</a></h5>
														<span class="meta"><i class="fa fa-clock-o"></i>Dec 28, 2013</span>
													</li>
													<li>
														<div class="f-left"><i class="fa fa-comments"></i></div>
														<h5><strong>admin on</strong> <a href="blog-single.html">Blog post title with Image</a></h5>
														<span class="meta"><i class="fa fa-clock-o"></i>Dec 24, 2013</span>
													</li>
													<li>
														<div class="f-left"><i class="fa fa-comments"></i></div>
														<h5><strong>admin on </strong> <a href="blog-single.html">Blog post title with Image</a></h5>
														<span class="meta"><i class="fa fa-clock-o"></i>Dec 22, 2013</span>
													</li>
												</ul>
											</div>
										</li>
										
										<li>
											<div class="tabs-style-bg shape new-angle">
												<ul class="nav nav-tabs" role="tablist">
													<li role="presentation" class="active"><a href="#s-1"><span>Tags</span></a></li>
													<li role="presentation"><a href="#s-2"><span>Comments</span></a></li>
													<li role="presentation"><a href="#s-3"><span>Recent</span></a></li>
												</ul>
												
												<div class="tab-content main-bg">
													<div role="tabpanel" class="tags-widget tab-pane fade in active" id="s-1">
														<div class="tags">
													    	<a href="#">Design</a>
													    	<a href="#">User interface</a>
													    	<a href="#">Performance</a>
													    	<a href="#">Development</a>
													    	<a href="#">WordPress</a>
													    	<a href="#">SEO</a>
													    	<a href="#">Joomla</a>
													    	<a href="#">ASP.Net</a>
													    	<a href="#">SharePoint</a>
													    </div>
													</div>
													
													<div role="tabpanel" class="tab-pane fade" id="s-2">
														<div class="w-recent-comments">
															<ul>
																<li>
																	<div class="f-left"><i class="fa fa-comments"></i></div>
																	<h5><strong>admin on</strong> <a href="blog-single.html">Blog Post with Video</a></h5>
																	<span class="meta"><i class="fa fa-clock-o"></i>Dec 28, 2013</span>
																</li>
																<li>
																	<div class="f-left"><i class="fa fa-comments"></i></div>
																	<h5><strong>admin on</strong> <a href="blog-single.html">Blog post title with Image</a></h5>
																	<span class="meta"><i class="fa fa-clock-o"></i>Dec 24, 2013</span>
																</li>
																<li>
																	<div class="f-left"><i class="fa fa-comments"></i></div>
																	<h5><strong>admin on </strong> <a href="blog-single.html">Blog post title with Image</a></h5>
																	<span class="meta"><i class="fa fa-clock-o"></i>Dec 22, 2013</span>
																</li>
															</ul>
														</div>
													</div>
													
													<div role="tabpanel" class="tab-pane fade" id="s-3">
														<div class="w-recent-posts">
															<ul>
																<li>
																	<div class="post-img">
																		<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/1.jpg') }}" alt=""></a>
																	</div>
																	<div class="widget-post-info">
																		<h5><a href="blog-single.html">Blog post title with Image</a></h5>
																		<div class="meta">
																			<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="post-img">
																		<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/2.jpg') }}" alt=""></a>
																	</div>
																	<div class="widget-post-info">
																		<h5><a href="blog-single.html">Blog post title</a></h5>
																		<div class="meta">
																			<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
																		</div>
																	</div>
																</li>
																<li>
																	<div class="post-img">
																		<a href="blog-single.html"><img src="{{ asset('assets/images/blog/small/3.jpg') }}" alt=""></a>
																	</div>
																	<div class="widget-post-info">
																		<h5><a href="blog-single.html">Blog post title with Image</a></h5>
																		<div class="meta">
																			<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													
												</div>
											</div>
										</li>
										
										<li class="widget shape new-angle">
											<h4 class="widget-head"><span class="main-color">Flickr</span> Stream</h4>
											<div class="widget-content">
												<ul id="flickrFeed2" class="flickr-widget"><li><a href="https://live.staticflickr.com/65535/51016374490_92d51747c7_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51016374490_92d51747c7_s.jpg" alt="Cluster."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/50999542289_b18bda26a2_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/50999542289_b18bda26a2_s.jpg" alt="Brückenbauer"><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51083367881_26f3bf24e6_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51083367881_26f3bf24e6_s.jpg" alt="06131."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51010663580_df3872b711_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51010663580_df3872b711_s.jpg" alt="Frisur."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51069452281_65a9e43524_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51069452281_65a9e43524_s.jpg" alt="X X."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51065866957_3ef5cd9620_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51065866957_3ef5cd9620_s.jpg" alt="Signature"><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51064156187_5a4ef192df_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51064156187_5a4ef192df_s.jpg" alt="the ring"><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51060031202_5d658b825a_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51060031202_5d658b825a_s.jpg" alt="Wiener Art."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51056851362_4bd059ee45_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51056851362_4bd059ee45_s.jpg" alt="Way to..."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51056011641_af23be13ac_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51056011641_af23be13ac_s.jpg" alt="Frühling."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51044517496_94914bc6e3_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51044517496_94914bc6e3_s.jpg" alt="Spital"><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51024500143_bf7821cee1_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51024500143_bf7821cee1_s.jpg" alt="Distance in the air"><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51023925507_eee1ec0cab_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51023925507_eee1ec0cab_s.jpg" alt="Focus."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/51011703781_2cbd87f2aa_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/51011703781_2cbd87f2aa_s.jpg" alt="Daylight."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/50995242808_559d52511e_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/50995242808_559d52511e_s.jpg" alt="Farbig."><span class="img-overlay"></span></a></li><li><a href="https://live.staticflickr.com/65535/50994735397_5411a57a1b_b.jpg" class="zoom"><img src="https://live.staticflickr.com/65535/50994735397_5411a57a1b_s.jpg" alt="50."><span class="img-overlay"></span></a></li></ul>
											</div>
										</li>
									</ul>
								</aside>
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