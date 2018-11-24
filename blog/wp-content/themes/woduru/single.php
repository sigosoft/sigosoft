<?php get_header(); ?>
<!-- start left sidebar -->
<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Blog <span></span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="https://sigosoft.com/">Home</a><span class="line-separate">/</span><a href="<?php bloginfo('url')?>/blog">Blog</a><span class="line-separate">/</span><span>Blog Post</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
				    		<div class="cell-9">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								 <div class="blog-posts">
			                		<div class="post-item fx" data-animate="fadeInLeft">
										<div class="details-img">
											<div class="post-lft-info">
												<div class="main-bg"><?php the_time('j') ?><br><?php the_time('M') ?><br><?php the_time('Y') ?><span class="tri-col"></span></div>
											</div>
											<img src="<?php the_post_thumbnail_url('large');?>" alt="Our Blog post image goes here">
										</div>
									    <article class="post-content">
									        <div class="post-info-container">
												<h1 class="main-color"><?php the_title();?></h1>
												
												<div class="post-info">
													<ul class="post-meta">
														<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#"><?php the_author(); ?></a></li>
														<li><i class="fa fa-folder-open"></i>Category: <a href="#"><?php the_category(', ') ?></a></li>
														<li class="meta-comments"><i class="fa fa-comments"></i>Comments: <a href="<?php the_permalink();?>"><?php comments_number(); ?>  </a></li>
													</ul>
												</div>
											</div>
											<p>
											<?php the_content();?>
											</p>
											<div class="post-tags">
												<i class="fa fa-tags"></i><?php the_tags(); ?>
											</div>
											
									    </article>
									</div><!-- .post-item end -->
									<?php /* <div class="comments">
										<h3 class="block-head">Comments</h3>
										<p class="hint marginBottom bold">There are <span class="main-color">5</span> comments on this post</p>
									    <ul class="comment-list">
									        <li>
									            <article class="comment">
									                <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                <div class="comment-content">
									                    <h5 class="comment-author skew-25">
									                        <span class="author-name skew25">John Martin</span>
									                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
									                        <span class="comment-date skew25">Jan 15, 2014</span>
									                    </h5>
									                    <p>Lorem ipsum dolor sit amet, 
														consectetur adipisicing elit. 
														Corporis accusamus alias doloribus 
														aliquam voluptas cupiditate animi 
														officia temporibus dicta iure.</p>
									                </div>
									            </article><!-- End .comment -->
									            <ul class="child-comment">
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article><!-- End .comment -->
									                </li>
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article><!-- End .comment -->
									                </li>
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article><!-- End .comment -->
									                </li>
									            </ul><!-- End .child-comment -->
									        </li>
									        <li>
									            <article class="comment">
									                <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                <div class="comment-content">
									                    <h5 class="comment-author skew-25">
									                        <span class="author-name skew25">John Martin</span>
									                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
									                        <span class="comment-date skew25">Jan 15, 2014</span>
									                    </h5>
									                    <p>Lorem ipsum dolor sit amet, 
														consectetur adipisicing elit. 
														Corporis accusamus alias doloribus 
														aliquam voluptas cupiditate animi 
														officia temporibus dicta iure.</p>
									                </div>
									            </article><!-- End .comment -->
									        </li>
									        <li>
									            <article class="comment">
									                <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                <div class="comment-content">
									                    <h5 class="comment-author skew-25">
									                        <span class="author-name skew25">John Martin</span>
									                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
									                        <span class="comment-date skew25">Jan 15, 2014</span>
									                    </h5>
									                    <p>Lorem ipsum dolor sit amet, 
														consectetur adipisicing elit. 
														Corporis accusamus alias doloribus 
														aliquam voluptas cupiditate animi 
														officia temporibus dicta iure.</p>
									                </div>
									            </article><!-- End .comment -->
									        </li>
									    </ul><!-- End .comment-list -->
									</div> */?>
									<form action="#" class="leave-comment contact-form">
									    <h3 class="block-head">Leave A Comment</h3>
<!-- 				    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Morbi accumsan nulla ac urna elementum dapibus. Phasellus eu felis orci, sit amet placerat eros. Sed aliquet iaculis nisi id convallis. Quisque nec ligula ut felis hendrerit iaculis quis sed neque.</p> -->
				    					<div class="col-md-12">
										
					    					<?php if ( comments_open() || get_comments_number() ) :
    comments_template();
endif; ?>
				    					</div>
									</form>
			                	</div>
								
								<?php endwhile; ?>

<?php endif; ?>
					    	</div>
						    <aside class="cell-3 right-sidebar">
								<?php include("leftsidebar.php"); ?>
							</aside>
			    		</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->


<?php get_footer(); ?>