<!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <?php 
                    $brands_post = new WP_Query(array(
                        'post_type' => 'client_sec'
                    ));
                     while($brands_post->have_posts()) : $brands_post->the_post(); ?>
                    <div class="col single-brand">
                        <a href="#">
                            <?php the_post_thumbnail('large', array(
                                'class' => 'mx-auto'
                            )) ?>
                        </a>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->	