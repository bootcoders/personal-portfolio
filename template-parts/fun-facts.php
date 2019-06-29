<!-- Start fact Area -->
	<section class="facts-area section-gap" id="facts-area">
		<div class="container">				
			<div class="row">
				<?php

				$fun_post = new WP_Query(array(
					'post_type'		=> 'fun_facts'
				));

				 while($fun_post->have_posts()): $fun_post->the_post(); ?>
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter"><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
															
			</div>
		</div>	
	</section>
	<!-- end fact Area -->	
	