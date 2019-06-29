<!-- Start recent-blog Area -->
	<section class="recent-blog-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1>Latest posts from our blog</h1>
					<p>
						You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
					</p>
				</div>
			</div>
			<div class="row">	
				<?php
				$recent_post = new WP_Query(array(
					'post_type'		=> 'post',
				));
				while($recent_post->have_posts()): $recent_post->the_post(); ?>
				<div class="single-recent-blog col-lg-4 col-md-4">
					<div class="thumb">
						

						<?php the_post_thumbnail('large', array(
							'class'			=> 'f-img img-fluid mx-auto'
						)) ?>
					</div>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						<div>
							
							<?php echo get_avatar(get_the_author_meta('ID'), 32) ?>
							<a href="#"><span><?php the_author() ?></span></a>
						</div>
						<div class="meta">
							13th Dec
							<span class="lnr lnr-heart"></span> 15
							<span class="lnr lnr-bubble"></span> 04
						</div>
					</div>							
					<a href="<?php the_permalink(); ?>">
						<h4><?php the_title(); ?></h4>
					</a>
					<p>
						<?php
							if(is_single()){
								the_content();
							}else{
								echo wp_trim_words(get_the_content(), 40, '....');
							}

						?>
					</p>	
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
														
									
										
			</div>
		</div>	
	</section>
	<!-- end recent-blog Area -->	