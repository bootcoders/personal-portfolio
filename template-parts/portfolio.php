<!-- Start portfolio-area Area -->
    <section class="portfolio-area section-gap" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Latest Featured Projects</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            
            
            
            <div class="filters-content">
                <div class="row">
                	<?php

                	$portfolio_post = new WP_Query(array(
                		'post_type'		=> 'portfolio'
                	));
                	 while($portfolio_post->have_posts()): $portfolio_post->the_post(); ?>
                    <div class="single-portfolio col-sm-4 all vector">
                    	<div class="relative">
                        	<div class="thumb">
                        		<div class="overlay overlay-bg"></div>
								
								<?php the_post_thumbnail('large', array(
									'class'		=> 'image img-fluid'
								)); ?>
                        		
                        	</div>
							<a href="<?php echo get_the_post_thumbnail_url()?>">
								<div class="middle">
								    <div class="text align-self-center d-flex">
										<?php echo get_post_meta(get_the_ID(), 'port_icon', true) ?>
								    </div>
								  </div>
							</a>                              		
                    	</div>
						<div class="p-inner">
						    <h4><?php the_title(); ?></h4>
							<div class="cat"><?php the_content(); ?></div>
						</div>					                               
                    </div>
                   <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End portfolio-area Area -->	