<ul class="sidebar_widgets">
									<li class="widget search-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Blog Search</h3>
										<div class="widget-content">
											<form action="<?php bloginfo('url'); ?>/" method="get">
										    	<input type="text"  id="t2-search" class="txt-box" placeholder="Enter search keyword..." value="<?php the_search_query(); ?>" name="s"  />
										    	<button type="submit" class="btn" id="searchsubmit"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</li>
									
									<li class="widget r-posts-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Recent Posts</h3>
										<div class="widget-content">
											<ul>
											<?php 	query_posts(array('post_type' => 'post',
												//'category_name'=>'slider',
												'order'=>'DESC'
												
												) );  
												?>
												
								<?php while (have_posts()) : the_post(); ?>
												<li>
													<div class="post-img">
														<img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">
													</div>
													<div class="widget-post-info">
														<h4>
															<a href="<?php the_permalink();?>">
																<?php the_title();?>
															</a>
														</h4>
														<div class="meta">
															<span><i class="fa fa-clock-o"></i><?php the_time('j,M,Y') ?></span><a href="<?php the_permalink();?>"><i class="fa fa-comments"></i><?php comments_number(); ?></a>
														</div>
													</div>
												</li>
													 <?php endwhile;wp_reset_query();?>
											</ul>
										</div>
									</li>
									
									<li class="widget blog-cat-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Blog Categories</h3>
										<div class="widget-content">
											<ul class="list list-ok alt">
													<?php
													$categories = get_categories('exclude=1&title_li=');
													foreach ($categories as $cat) {
														echo "<li><a href=\"".$cat->category_nicename."\">".$cat->cat_name."</a>
															  "."(".$cat->category_count.")</li>";
													}
													?>
											</ul>
										
										</div>
									</li>
									
									<!-- <li class="widget r-comments-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Recent Comments</h3>
										<div class="widget-content">
											<ul>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog Post with Video</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 28, 2013</span>
												</li>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog post title with Image</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 24, 2013</span>
												</li>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog post title with Image</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 22, 2013</span>
												</li>
											</ul>
										</div>
									</li>-->
									
									<li class="widget tags-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Tag Cloud</h3>
										<div class="widget-content">
											<div class="tags">
										    	<?php the_tags(); ?>
												<style>
													.widget-content .tags{
														font-size:0;
													}
												</style>
										    </div>
										</div>
									</li>
									
									<li class="widget flickr-stream-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Flickr Stream</h3>
										<div class="widget-content">
											<ul id="flickrFeed-inner"></ul>
										</div>
									</li>
								</ul>