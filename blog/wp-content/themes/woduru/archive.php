


<?php get_header(); ?>


	<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
							<?php is_tag(); ?>
								<?php if (have_posts()) : ?>
							  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
							  <?php /* If this is a category archive */ if (is_category()) { ?>
							
									<h1 class="fx" data-animate="fadeInLeft">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category <span></span></h1>
									<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</a>
								</div>
							  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							
									<h1 class="fx" data-animate="fadeInLeft">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217; <span></span></h1>
									<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</a>
								</div>
							  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								
									<h1 class="fx" data-animate="fadeInLeft">Archive for <?php the_time('F jS, Y'); ?> <span></span></h1>
									<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Archive for <?php the_time('F jS, Y'); ?> </a>
								</div>
							  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							  	<h1 class="fx" data-animate="fadeInLeft">Archive for <?php the_time('F, Y'); ?> <span></span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Archive for <?php the_time('F, Y'); ?></a>
								</div>
								
							  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								
									<h1 class="fx" data-animate="fadeInLeft">Archive for <?php the_time('Y'); ?> <span></span></h1>
									<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Archive for <?php the_time('Y'); ?></a>
								</div>
							  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
								
									<h1 class="fx" data-animate="fadeInLeft">Author Archive <span></span></h1>
							  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							  <div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Author Archive</a>
								</div>
								
									<h1 class="fx" data-animate="fadeInLeft">Blog Archives <span></span></h1>
									<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="<?php bloginfo('url')?>">Home</a><span class="line-separate">/</span><a href="#">Blog Archives</a>
								</div>
							  <?php } ?>
							
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
				    		<div class="cell-9">
							    <div class="blog-posts">
								
							
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
													
												</div>
											</div>
											<?php the_excerpt();?> <a class="read-more" href="<?php the_permalink();?>">
											Read more</a> 
									    </article>
									</div>
									<?php endwhile; ?>
<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
<?php else : ?>
<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
									 <?php wp_reset_query();?>
									
								
																	
									
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