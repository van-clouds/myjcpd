		<div class="coursesHeroText col-xl-2 offset-xl-1">
				GENERAL
		</div>
	</section>
	<section id="coursearea1">
		<div class="coursemenu">
			<p>
				<a class="link" href="<?php echo site_url(); ?>"> Home</a>
				<a class="link" href="<?php echo site_url()."/sample-page/" ;?>"> All Courses</a>
				<a class="link" href="#"> General</a>
			<p>
			<p><?php the_title();?></p>
		</div>
		<div class="row courseAreaContainer">
			<div class="col-xl-9 col-md-9 col-lg-9">
				<div class="row courseareaindex">
					<div class="col-xl-2 col-lg-2 col-md-2 courseareaindex_teacher text-center">
						<img src="
							<?php
								$page_id=get_the_post_id();
								echo kdmfi_get_featured_image_src('featured-image-2','full',$page_id );

							 ?>
						" style="border-radius: 50%; margin-right: 2px;">
						<div>
							<div>Teacher</div>	 
							<div>
								<?php 
									$page_id=get_the_post_id();	
									echo get_post_meta($page_id,'instructor',true); ?></div>
						</div>
					</div>
			
					<div class="col-xl-2 col-lg-2 col-md-2 courseareaindexmenu2 text-center">
						<div>Categories</div>	 
						<div>GENERAL</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 text-center courseareaindexmenu3">
						<div>Review</div>
						<div>
							<?php
								$page_id=get_the_post_id();
								 echo get_post_meta($page_id,'ratings_average',true)." stars"

							 ?>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 text-right courseareaindexmenu4">
						<span>
							 <?php 
							 	$page_id=get_the_post_id();	
								 echo get_post_meta($page_id,'price',true); 

							 ?>
							
							 </span>
						<button class="btn btn-sm btn-dark" style="margin-top: -21px;">TAKE THIS COURSE</button>
					</div>
					
				</div>
				<div class="coursepagecontainer">
					<div class="coursevideocontainer">	</div>
					<div class="coursecontainer col-xl-12">
						<div class="tabbable full-width-tabs">
							<ul class="nav nav-tabs nav-justified coursevideomenu" role="tablist">
									<li class=" navitem active coursevideomenuitem itemactive ">
										<a  class="nav-link active" data-toggle="tab" href="#menu1">
											<i class="fa fa-bookmark"></i>
											Overview
										</a>
									</li>
									<li class=" navitem coursevideomenuitem  ">
									  	<a  class="nav-link" data-toggle="tab" href="#menu2">	
											<i class="fa fa-bookmark"></i>
											Curriculum
										</a>	
									</li>
									<li class=" navitem  coursevideomenuitem  ">
										<a  class="nav-link" data-toggle="tab" href="#menu3">
											<i class="fa fa-bookmark"></i>
											Instructor
										</a>
									</li>
									<li class=" navitem  coursevideomenuitem  ">
										<a  class="nav-link" data-toggle="tab" href="#menu4">
											<i class="fa fa-bookmark"></i>
											Review
										</a>
									</li>
							</ul>
							<div class="tab-content">
								<div id="menu1" class="tab-pane active coursepagelearningcontainer" role="tabpanel">
								  <div class="row">	
									<div class="col-xl-8 coursepagelearningcontainerleft">
										<?php 
								
											global $post;
											$post_id= $post->ID;
											$post_object = get_post( $post_id );
											echo $post_object->post_content;

										 ?>
									</div>
									<div class="col-xl-4 coursepagelearningcontainerright">

											<div>
												<h6>COURSE CATEGORIES</h6>
											</div>
											<div class="col-xl-10 coursepagelearningcontainerrightlist">
												<div class="coursepagelearningcontainerrightlistitem">
														<i class="fa fa-files-o"></i>
														<span>Lectures</span>
														<span>0</span>		
														<hr>
												</div>	

											</div>											
									</div>
								  </div>	
									  	
								</div>
								<div id="menu2" class="tab-pane fade row coursepagelearningcontainer_curriculum" role="tabpanel">
									
								</div>
								<div id="menu3" class="tab-pane fade row coursepagelearningcontainer_instructor" role="tabpanel">

									<?php
					                    $args = array(
					                        'sort_order' => 'asc',
					                        'sort_column' => 'post_title',
					                        'hierarchical' => 1,
					                        'exclude' => '',
					                        'include' => '',
					                        'meta_key' => '',
					                        'meta_value' => '',
					                        'authors' => '',
					                        'child_of' => 69,
					                        'parent' => -1,
					                        'exclude_tree' => '',
					                        'number' => '',
					                        'offset' => 0,
					                        'post_type' => 'page',
					                        'post_status' => 'publish'
					                    ); 
					                    $pages = get_pages($args);
					                   

					                    foreach ($pages as $page) {

					                 ?>    
									<div class="instructor_info col-xl-10 offset-xl-1">
										<div class="row instructor_info_author">
											<div class="col-xl-2">
												<img src="<?php  echo kdmfi_get_featured_image_src('featured-image-2','full',$page->ID ); ?>">
												
											</div>
											<div class="col-xl-10 instructor_info_author_left">
												<a class="link" href="#"><?php echo get_post_meta($page->ID,'reviewer',true); ?></a>
												 <p class="title"><?php echo($page->post_title); ?></p>
												
											</div>	


										</div>
										<p class="text"><?php

				                            $post_object = get_post( $page->ID );
				                             echo $post_object->post_content;

                        					 ?></p>
										

									</div>
									<?php } ?>
								</div>
								<div id="menu4" class="tab-pane fade row coursepagelearningcontainer_reviews " role="tabpanel">
									 <?php //echo do_shortcode('[WPCR_SHOW POSTID="1" NUM="3"]'); ?>
									 <br>
									<?php 
										echo do_shortcode("[WPCR_INSERT]");

									// If comments are open or we have at least one comment, load up the comment template.
 									//if ( comments_open() || get_comments_number() ) :
     								//	comments_template();
 									//endif;
 									 ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-xl-3 col-md-3 col-lg-3">
				
				<div class="offset-xl-1 allcourses">
					<h6 >ALL COURSES</h6>
					<?php 	
						 wp_nav_menu( array( 
                                            'theme_location' => 'my-sidebar-menu', 
                                             ) );
					?>
				</div>
				<div class="offset-xl-1 latestcourses">
					<h6 >LATEST COURSES</h6>
					<?php 
						query_posts(array('showposts' => 4, 'post_parent' => 10, 'post_type' => 'page'));

							while (have_posts()) { 
								the_post(); ?>
						<div class="row">
						<div class="col-xl-5 offset-xl-1 latestcoursesimage"><?php the_post_thumbnail('small-thumbnail'); ?> </div>
						<div class="col-xl-5 offset-xl-1">
							<a href="<?php the_permalink() ?>"><p class="latestcoursesheading link"><?php the_title(); ?></p></a>
							<p class="latestcoursesheadingprice"><?php echo get_post_meta(get_the_id(),'price',true); ?></p>
						</div>
					</div>
							
					<?php }

							wp_reset_query();  // Restore global post data
					?>				
				</div>
			</div>
		</div>
	</section>
	<section id="coursearea2">
		<div class="col-xl-12">
			<h2 style="font-family: 'EB Garamond', serif; font-weight: bold;">EVENTS</h2>
			<hr style=" width: 40px; margin-left: 0px; border-color: black;">
		</div>

		<?php 	 get_template_part('div_popularcourses', get_post_format() ); 
 ?>
	</section>