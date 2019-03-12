
<?php get_header(); 

	 get_template_part( 'section_home', get_post_format() ); 
	 get_template_part( 'section_popularcourses', get_post_format() ); 
	 get_template_part( 'section_homesignup', get_post_format() ); 
	 get_template_part( 'section_whatpeoplesay', get_post_format() );  

 	 get_footer();
  ?>
   