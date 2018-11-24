<?php get_header(); ?>
<!-- start left sidebar -->
<!-- Content Start -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft"><?php the_title();?> <span></span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="https://sigosoft.com/">Home</a><span class="line-separate">/</span><a href="<?php the_permalink()?>"><?php the_title();?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
				    		<div class="cell-9">
						
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