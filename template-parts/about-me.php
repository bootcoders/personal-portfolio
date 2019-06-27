<!-- Start home-about Area -->
<section class="home-about-area pt-120">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<?php 

				$about_post = new WP_Query(array(
					'post_type'		=>  'about_me'
				));

			while($about_post->have_posts()) : $about_post->the_post() ?>
			<div class="col-lg-6 col-md-6 home-about-left">

				<?php the_post_thumbnail('large', array(
					'class' => 'img-fluid'
				)); ?>
			</div>
			<div class="col-lg-5 col-md-6 home-about-right">
				<h6><?php echo get_post_meta(get_the_ID(), 'about_sub_title' ,true); ?></h6>
				<h1 class="text-uppercase"><?php the_title(); ?></h1>
				<p>
					<?php the_content(); ?>
				</p>
				<a href="<?php echo get_post_meta(get_the_ID(), 'about_btn_url' ,true); ?>" class="primary-btn text-uppercase"><?php echo get_post_meta(get_the_ID(), 'about_btn' ,true); ?></a>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>	
</section>
<!-- End home-about Area -->
