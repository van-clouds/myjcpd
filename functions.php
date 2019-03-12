<?php 

	function myjcpd_files() {
		wp_enqueue_style('style',get_stylesheet_uri());
		wp_enqueue_style('Header-Blue',get_template_directory_uri() . '/assets/css/Header-Blue.css');
		wp_enqueue_style('animate',get_template_directory_uri() . '/assets/css/animate.css');
		wp_enqueue_style('bootstrap.min',get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome.min',get_template_directory_uri() . '/assets/css/font-awesome-4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('owl.carousel.min',get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
		wp_enqueue_style('owl.theme.default',get_template_directory_uri() . '/assets/css/owl.theme.default.css');
	}

	add_action('wp_enqueue_scripts','myjcpd_files');

	add_filter('upload_size_limit','increase_upload');

	function increase_upload($bytes) {
	    return 262144000;
	}

	function myJCPD_features() {
		add_theme_support('title-tag');
	}

	add_action('after-setup-theme','myJCPD_features');


	//Adding custom menus
	function wpb_custom_new_menu() {
 		 register_nav_menu('my-footer-menu',__( 'My Footer Menu' ));
 		 register_nav_menu('my-header-menu',__( 'My Header Menu' ));
 		  register_nav_menu('my-sidebar-menu',__( 'My Sidebar Menu' ));

		}
		
	add_action( 'init', 'wpb_custom_new_menu' );

	


	// Add Featured Image Support
	function do_featuredImages() {
		// Add Featured Image Support
		add_theme_support('post-thumbnails',array( 'post', 'page' ));
	}

	add_action('after_setup_theme','do_featuredImages' );
	add_image_size('small-thumbnail',114, 93, true);
	add_image_size('banner-image',268,203, false);

	//adding multiple featured images
	add_filter( 'kdmfi_featured_images', function( $featured_images ) {
	  $args = array(
	    'id' => 'featured-image-2',
	    'desc' => 'Your description here.',
	    'label_name' => 'Featured Image 2',
	    'label_set' => 'Set featured image 2',
	    'label_remove' => 'Remove featured image 2',
	    'label_use' => 'Set featured image 2',
	    'post_type' => array( 'page' ),
	  );

	  $featured_images[] = $args;

	  return $featured_images;
	});

	// get the page/post id of any page
		/**
	 * @uses WP_Query
	 * @uses get_queried_object()
	 * @see get_the_ID()
	 * @return int
	 */

		function get_the_post_id() {
		  if (in_the_loop()) {
		       $post_id = get_the_ID();
		  } else {
		       global $wp_query;
		       $post_id = $wp_query->get_queried_object_id();
		         }
		  return $post_id;
		}



?>