<!-- start banner Area -->
<section class="about-banner">
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<?php wp_title('') ?>			
				</h1>	
				<p class="text-white link-nav">
					<?php the_crumbs(array(
						'seperator' => ' -> '
					)); ?>
				</p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->	