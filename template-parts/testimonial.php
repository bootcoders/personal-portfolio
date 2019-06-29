<!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                	<?php 
                	$testimonial_post = new WP_Query(array(
                		'post_type'		=> 'testimonial'
                	));
                	while($testimonial_post->have_posts()): $testimonial_post->the_post(); ?>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                           

                            <?php the_post_thumbnail('large', array(
                            	'class'		=> 'img-fluid'
                            )); ?>
                        </div>
                        <div class="desc">
                            <p>
                               <?php the_content(); ?>		     
                            </p>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo get_post_meta(get_the_ID(), 'test_degination', true) ?></p>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->