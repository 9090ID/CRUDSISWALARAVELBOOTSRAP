
	
	<?php $__env->startSection('content'); ?>
	
	 <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(<?php echo e($post->thumbnail()); ?>);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?php echo $post->title; ?></h1>
				</div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li><?php echo $post->title; ?></li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- Left part start -->
						<div class="col-lg-8 col-xl-8">
							<!-- blog start -->
							<div class="recent-news blog-lg">
								<div class="action-box blog-lg">
									<img src="<?php echo e($post->thumbnail()); ?>" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i><?php echo e($post->created_at->format('d M Y')); ?></a></li>
										<!--<li><a href="#"><i class="fa fa-comments-o"></i>10 Comment</a></li>-->
										<li><a href="#"><i class="fa fa-user"></i><?php echo $post->user->name; ?></a></li>
									</ul>
									<h5 class="post-title"><a href="#"><?php echo $post->title; ?>.</a></h5>
									<p><?php echo $post->content; ?>.</p>
									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
									<div class="widget_tag_cloud">
										<h6>TAGS</h6>
										<div class="tagcloud"> 
											<a href="#">Design</a> 
											<a href="#">User interface</a> 
											<a href="#">SEO</a> 
											<a href="#">WordPress</a> 
											<a href="#">Development</a> 
											<a href="#">Joomla</a> 
											<a href="#">Design</a> 
											<a href="#">User interface</a> 
											<a href="#">SEO</a> 
											<a href="#">WordPress</a> 
											<a href="#">Development</a> 
											<a href="#">Joomla</a> 
											<a href="#">Design</a> 
											<a href="#">User interface</a> 
											<a href="#">SEO</a> 
											<a href="#">WordPress</a> 
											<a href="#">Development</a> 
											<a href="#">Joomla</a> 
										</div>
									</div>
									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
										<h6>SHARE </h6>
										<ul class="list-inline contact-social-bx">
											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
								</div>
							</div>
							<div class="clear" id="comment-list">
								<div class="comments-area" id="comments">
									<h2 class="comments-title">8 Comments</h2>
									<div class="clearfix m-b20">
										<!-- comment list END -->
										<ol class="comment-list">
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic1.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
													<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur adipiscing elit.
														Nam vitae neque vitae sapien malesuada aliquet. </p>
													<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
												</div>
												<ol class="children">
													<li class="comment odd parent">
														<div class="comment-body">
															<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic2.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
															<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
																In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
																ac elementum ligula blandit ac.</p>
															<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
														</div>
														<ol class="children">
															<li class="comment odd parent">
																<div class="comment-body">
																	<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic3.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
																	<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
																		In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
																		ac elementum ligula blandit ac.</p>
																	<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
																</div>
															</li>
														</ol>
														<!-- list END -->
													</li>
												</ol>
												<!-- list END -->
											</li>
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic1.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
													<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
														In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
														ac elementum ligula blandit ac.</p>
													<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
												</div>
											</li>
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic2.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
													<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
														In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
														ac elementum ligula blandit ac.</p>
													<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
												</div>
											</li>
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img  class="avatar photo" src="<?php echo e(asset('/frontend')); ?>/images/testimonials/pic3.jpg" alt=""> <cite class="fn">John Doe</cite> <span class="says">says:</span> </div>
													<div class="comment-meta"> <a href="#">December 02, 2019 at 10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. 
														In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis, 
														ac elementum ligula blandit ac.</p>
													<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
												</div>
											</li>
										</ol>
										<!-- comment list END -->
										<!-- Form -->
										<div class="comment-respond" id="respond">
											<h4 class="comment-reply-title" id="reply-title">Leave a Reply <small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
											<form class="comment-form" id="commentform" method="post">
												<p class="comment-form-author">
													<label for="author">Name <span class="required">*</span></label>
													<input type="text" value="" name="Author"  placeholder="Author" id="author">
												</p>
												<p class="comment-form-email">
													<label for="email">Email <span class="required">*</span></label>
													<input type="text" value="" placeholder="Email" name="email" id="email">
												</p>
												<p class="comment-form-url">
													<label for="url">Website</label>
													<input type="text"  value=""  placeholder="Website"  name="url" id="url">
												</p>
												<p class="comment-form-comment">
													<label for="comment">Comment</label>
													<textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
												</p>
												<p class="form-submit">
													<input type="submit" value="Submit Comment" class="submit" id="submit" name="submit">
												</p>
											</form>
										</div>
										<!-- Form -->
									</div>
								</div>
							</div>
							<!-- blog END -->
						</div>
						<!-- Left part END -->
						<!-- Side bar start -->
						<div class="col-lg-4 col-xl-4">
							<aside  class="side-bar sticky-top">
								<div class="widget">
									<h6 class="widget-title">Search</h6>
									<div class="search-bx style-1">
										<form role="search" method="post">
											<div class="input-group">
												<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
												<span class="input-group-btn">
													<button type="submit" class="fa fa-search text-primary"></button>
												</span> 
											</div>
										</form>
									</div>
								</div>
								<div class="widget recent-posts-entry">
									<h6 class="widget-title">Recent Posts</h6>
									<div class="widget-post-bx">
										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="<?php echo e(asset('/frontend')); ?>/images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h6>
												</div>
												<ul class="media-post">
													<li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a></li>
												</ul>
											</div>
										</div>
										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="<?php echo e(asset('/frontend')); ?>/images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h6>
												</div>
												<ul class="media-post">
													<li><a href="#"><i class="fa fa-calendar"></i>May 14 2019</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i>23 Comment</a></li>
												</ul>
											</div>
										</div>
										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="<?php echo e(asset('/frontend')); ?>/images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h6>
												</div>
												<ul class="media-post">
													<li><a href="#"><i class="fa fa-calendar"></i>June 12 2019</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i>27 Comment</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="widget widget-newslatter">
									<h6 class="widget-title">Newsletter</h6>
									<div class="news-box">
										<p>Enter your e-mail and subscribe to our newsletter.</p>
										<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
											<div class="ajax-message"></div>
											<div class="input-group">
												<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
												<button name="submit" value="Submit" type="submit" class="btn black radius-no">
													<i class="fa fa-paper-plane-o"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
								<div class="widget widget_gallery gallery-grid-4">
									<h6 class="widget-title">Our Gallery</h6>
									<ul>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic2.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic1.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic5.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic7.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic8.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic9.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic3.jpg" alt=""></a></div></li>
										<li><div><a href="#"><img src="<?php echo e(asset('/frontend')); ?>/images/gallery/pic4.jpg" alt=""></a></div></li>
									</ul>
								</div>
								<div class="widget widget_tag_cloud">
									<h6 class="widget-title">Tags</h6>
									<div class="tagcloud"> 
										<a href="#">Design</a> 
										<a href="#">User interface</a> 
										<a href="#">SEO</a> 
										<a href="#">WordPress</a> 
										<a href="#">Development</a> 
										<a href="#">Joomla</a> 
										<a href="#">Design</a> 
										<a href="#">User interface</a> 
										<a href="#">SEO</a> 
										<a href="#">WordPress</a> 
										<a href="#">Development</a> 
										<a href="#">Joomla</a> 
										<a href="#">Design</a> 
										<a href="#">User interface</a> 
										<a href="#">SEO</a> 
										<a href="#">WordPress</a> 
										<a href="#">Development</a> 
										<a href="#">Joomla</a> 
									</div>
								</div>
							</aside>
						</div>
						<!-- Side bar END -->
					</div>
				</div>
			</div>
        </div>
    </div>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelsiswa\resources\views/sites/singlepost.blade.php ENDPATH**/ ?>