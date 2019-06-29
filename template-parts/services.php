<!-- Start services Area -->
	<section class="services-area section-gap">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">My Offered Services</h1>
                        <p>At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
                    </div>
                </div>
            </div>						
			<div class="row">
				<?php 

				$service_post = new WP_Query(array(
					'post_type'		=> 'my_service'
				));

				while($service_post->have_posts()): $service_post->the_post(); ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-services">
						<span class="<?php echo get_post_meta(get_the_ID(), 'service_icon' , true) ?>"></span>
						<a href="#"><h4><?php the_title(); ?></h4></a>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
																	
			</div>
		</div>	
	</section>
	<!-- End services Area -->	