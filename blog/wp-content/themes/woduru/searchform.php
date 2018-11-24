<li class="widget search-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Blog Search</h3>
										<div class="widget-content">
											<form action="<?php bloginfo('url'); ?>/" method="get">
										    	<input type="text"  id="t2-search" class="txt-box" placeholder="Enter search keyword..." value="<?php the_search_query(); ?>" name="s"  />
										    	<button type="submit" class="btn" id="searchsubmit"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</li>