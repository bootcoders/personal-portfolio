	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<?php 
					$hero_section = new WP_Query(array(
						'post_type' => 'hero_section'
					));
				while($hero_section->have_posts()): $hero_section->the_post() ?>
				<div class="col-lg-6 col-md-6 banner-left">
					<h6><?php echo get_post_meta(get_the_ID(), 'hero_sub_title', true) ?></h6>
					<h1><?php the_title(); ?></h1>
					<p>
						<?php the_content() ?>
					</p>
					<a href="<?php echo get_post_meta(get_the_ID(), 'btn_url', true); ?>" class="primary-btn text-uppercase"><?php echo get_post_meta(get_the_ID(), 'btn_text', true); ?></a>
				</div>
				<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endwhile; wp_reset_postdata()?>
			</div>
		</div>					
	</section>
	<!-- End banner Area -->
