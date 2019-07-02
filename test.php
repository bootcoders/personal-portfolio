<!-- 
Template Name: Test 
-->


<?php 



get_header();

?>
<div class="wrap">
	
	<?php 
	
while(have_posts()){
	the_post();

	the_title();

	the_content();
} ?>
</div>
<?php 

get_footer();