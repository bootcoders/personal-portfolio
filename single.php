

<?php get_header(); ?>
	
	<?php get_template_part('template-parts/page-header') ?>				  
		  
			
<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 posts-list">
					<?php while(have_posts()) : the_post(); ?>
						<div class="single-post row">
							<div class="col-lg-3  col-md-3 meta-details">
								
								<?php the_tags( '<ul  class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
								<div class="user-details row">
									<p class="user-name col-lg-12 col-md-12 col-6">
										<a href="#"><?php the_author(); ?></a> <span class="lnr lnr-user"></span>
									</p>
									<p class="date col-lg-12 col-md-12 col-6">
										<a href="#"><?php echo get_the_date(); ?></a> <span class="lnr lnr-calendar-full"></span>
									</p>
									
									<p class="comments col-lg-12 col-md-12 col-6">
										<a href="#"><?php comments_number('No', 'No', '%'); ?> Comments</a> <span class="lnr lnr-bubble"></span>
									</p>						
								</div>
							</div>
							<div class="col-lg-9 col-md-9 ">
								<div class="feature-img">
									<?php the_post_thumbnail('large', array(
										'class'		=> 'img-fluid'
									)) ?>
								</div>
								<a class="posts-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								<p class="excert">
									<?php if(is_single()){
										the_content();

									} else{
										echo wp_trim_words(get_the_content(), 40, '...');
									}

									?>
									
								</p>
								
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
																		
                   
				</div>
			
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section>
<!-- End post-content Area -->


<?php get_footer(); ?>