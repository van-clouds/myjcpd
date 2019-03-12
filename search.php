<?php get_header(); ?>
<div class="coursesHeroText col-xl-2 offset-xl-1">
				GENERAL
		</div>
</section>
<section id="coursearea">
		<div class="coursemenu">
			<p>
				<a class="link" href=""> Home</a>
				<a class="link" href=""> All Courses</a>
				<a class="link" href=""> General</a>
			<p>
			<p>Introduction LearnPress – LMS plugin</p>
		</div>
		<div class="row courseAreaContainer">
			<div class="col-xl-9 col-md-10 col-lg-10">
				<div class="row courseareaindex">
					
					<div class="offset-xl-6 col-xl-6">
						<?php get_search_form(); ?>
					</div>
					
				</div>

				<?php if (have_posts() ) : ?>
					<h3>Search results for: <?php the_search_query(); ?></h3>
					<?php 
						while ( have_posts() ) : the_post(); 
					?>

					 <div class="popularcoursesContainer">
		                <div class="popularcoursesImage" style="<?php the_post_thumbnail(); ?>">
		                    <div class="popularcoursesImageChild">
		                        <span><a class="text-white" href=" <?php echo(get_permalink()); ?> ">READ MORE</a></span>
		                    </div>
		                </div>
		                <div class="popularcoursesInstructor">
		                	<img src="
		                        <?php echo kdmfi_get_featured_image_src('featured-image-2','full',$page->ID ); ?> 
		                    " style="border-radius: 50%;  width: inherit; height: inherit;">
		                </div>
		                <div class="popularcoursesContent">
		                    <p style="margin-top: 35px; font-size: 11px;" class="text-center"><?php the_author(); ?> </p>
		                    <a href=" <?php echo(get_permalink()); ?> " class="link">
		                    	<h5 class="text-center"><?php the_title(); ?></h5>
		                    </a>
		                    <hr style="width:90%">
		                    <div style="display:flex;">
		                        <p>
		                            <i class="fa fa-users" style="color: grey; margin-left: 12px;"> 300</i>
		                            <i class="fa fa-comment" style="color: grey; margin-left: 12px;">
		                            	<?php echo get_post_meta(get_the_id(),'ratings_users',true) ?></i>
		                        </p>
		                        <p> <?php echo get_post_meta(get_the_id(),'price',true) ?></p>
		                    </div>
		                </div>
            		</div>
            	<?php endwhile; ?>

				<?php endif; ?>
				
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
				</div> -->
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
						query_posts(array('showposts' => 4, 'post_parent' => 2, 'post_type' => 'page'));

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
<?php get_footer(); ?>