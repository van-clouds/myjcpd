<div class="coursesHeroText col-xl-2 offset-xl-1">
				GENERAL
		</div>
</section>
	<section id="coursearea">
		<div class="coursemenu">
			<p>
				<a class="link" href="<?php echo site_url(); ?>"> Home</a>
				<a class="link" href="<?php echo site_url()."/sample-page/" ;?>"> All Courses</a>
				<a class="link" href="#"> General</a>
			<p>
			
		</div>
		<div class="row courseAreaContainer">
			<div class="col-xl-9 col-md-10 col-lg-10">
				<div class="row courseareaindex1">
					
					<div class="offset-xl-6 col-xl-6 ">
						<?php get_search_form(); ?>
					</div>
					
				</div>
		
				<div class="row">
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
                        'child_of' => 10,
                        'parent' => -1,
                        'exclude_tree' => '',
                        'number' => '',
                        'offset' => 0,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    ); 
                    $pages = get_pages($args); 

                    foreach ($pages as $page) {
                       // $getAuthorName= get_user_by('ID',$page->post_author);
                        //$displayAuthorName = $getAuthorName->display_name;
                        $image_id = 'featured-image-2';
                 ?>
                
                <div class="popularcoursesContainer">
                <div class="popularcoursesImage">
                    <div class="popularcoursesImageChild"  style="
                    		background-image: url('<?php echo get_the_post_thumbnail_url($page->ID,'banner-image'); ?>'); ">
                        <span><a class="text-white" href=" <?php echo($page->guid) ?> ">READ MORE</a></span>
                    </div>
                </div>
                <div class="popularcoursesInstructor">
                	<img src="
                        <?php echo kdmfi_get_featured_image_src('featured-image-2','full',$page->ID ); ?> 
                    " style="border-radius: 50%; width: inherit; height: inherit;">
                </div>
                <div class="popularcoursesContent">
                    <p style="margin-top: 35px; font-size: 11px;" class="text-center">
                    	<?php echo get_post_meta($page->ID,'instructor',true) ?> </p>
                    <a href=" <?php echo($page->guid); ?> " class="link"><h5 class="text-center"><?php echo($page->post_title); ?></h5></a>
                    <hr style="width:90%">
                    <div style="display:flex;">
                        <p>
                            <i class="fa fa-users" style="color: grey; margin-left: 12px;"> 300</i>
                            <i class="fa fa-comment" style="color: grey; margin-left: 12px;"> 
                            	<?php echo get_post_meta($page->ID,'ratings_users',true) ?></i>
                        </p>
                        <p><?php echo get_post_meta($page->ID,'price',true) ?></p>
                    </div>
                </div>
            </div>

              
              <?php 
                }
             ?>

				</div>
				
			</div>
			<div class="col-xl-3 col-md-2 col-lg-2">
				<!-- <div class="coursecategories offset-xl-1">
					<h6 class="offset-xl-1"> Course categories</h6>
						<p><input type="checkbox" name="" class="offset-xl-1 coursecategoriescheckbox" >  Backend (3) </p>
						<p><input type="checkbox" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="checkbox" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) <p>
						<p><input type="checkbox" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="checkbox" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3)</p>
						<p><input type="checkbox" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>

					<h6 class="offset-xl-1"> Instructors</h6>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) <p>
				

					<h6 class="offset-xl-1"> Price</h6>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) </p>
						<p><input type="radio" name="" class="coursecategoriescheckbox offset-xl-1" >  Backend (3) <p>
				    <div class="offset-xl-3">
					<button class="col-xl-8  filterbutton text-center"> FILTER RESULTS</button>
					</div>
				</div>
				<div class="offset-xl-1 allcourses">
					<h6 >ALL COURSES</h6>
					<p  class ="offset-xl-1 link">BACKEND</p>
					<p  class ="offset-xl-1 link">BACKEND</p>
					<p  class ="offset-xl-1 link">BACKEND</p>
				</div> -->
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
							<p class="latestcoursesheadingprice"><?php echo get_post_meta(get_the_id(),'price',true) ?></p>
						</div>
					</div>
							
					<?php }

							wp_reset_query();  // Restore global post data
					?>				
				</div>
				
			</div>
		</div>
	</section>