<?php get_header(); ?>


	<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Blog <span></span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Blog</a>
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
								
								<?php 	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								query_posts(array('post_type' => 'post',
								//'category_name'=>'slider',
								
								
								) );  
								?>
							
								<?php while (have_posts()) : the_post(); ?>
			                		<div class="post-item fx" data-animate="fadeInLeft">
										<div class="post-image">
											<a href="<?php the_permalink();?>">
												<div class="mask"></div>
												<div class="post-lft-info">
													<div class="main-bg"><?php the_time('j') ?><br><?php the_time('M') ?><br><?php the_time('Y') ?><span class="tri-col"></span></div>
												</div>
												          <?php
									// Must be inside a loop.
									
									if ( has_post_thumbnail() ) {?>
												<img src="<?php the_post_thumbnail_url('large');?>" alt="Our Blog post image goes here">
													<?php }
									?>
											</a>
										</div>
									    <article class="post-content">
									        <div class="post-info-container">
												<div class="post-info">
													<h2><a class="main-color" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
													<ul class="post-meta">
														<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#"><?php the_author(); ?></a></li>
														<li><i class="fa fa-folder-open"></i>Category: <a href="#"><?php the_category(', ') ?></a></li>
														<li class="meta-comments"><i class="fa fa-comments"></i>Comments: <a href="<?php the_permalink();?>"><?php comments_number(); ?>  </a></li>
													</ul>
												</div>
											</div>
											<?php the_excerpt();?> <a class="read-more" href="<?php the_permalink();?>">
											Read more</a> 
									    </article>
									</div>
									
									 <?php endwhile;wp_reset_query();?>
									
								
																	
									
			                	</div>
					    	</div>
						    <aside class="cell-3 right-sidebar">
								<?php include("leftsidebar.php"); ?>
							</aside>
			    		</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->
			
		


<?php //get_sidebar(); ?>
<?php get_footer(); ?>