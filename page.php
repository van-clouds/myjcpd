<?php get_header(); ?>

<?php
	if (wp_get_post_parent_id(get_the_id())) {
		 get_template_part( 'coursepage_content', get_post_format() );  
	}
	else {
		 get_template_part( 'courses_content', get_post_format() );  
	}
 ?>	

<?php get_footer();?>