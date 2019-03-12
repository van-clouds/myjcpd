 <section id="whatpeoplesay">

       <div class="whatpeoplesayHeading">
            <h2 style="font-weight: 900; text-align: center;">  TEAM </h2>
            <p class="text-center" style=" color: #555252bd; font-size: 13px;">MEET OUR TEAM MEMBERS</p>
            <hr style=" width: 40px; margin-left: 48%; border-color: black;">
        </div>
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
          <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

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
                        'child_of' => 24,
                        'parent' => -1,
                        'exclude_tree' => '',
                        'number' => '',
                        'offset' => 0,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    ); 
                    $pages = get_pages($args);
                    $i = 0; 

                    foreach ($pages as $page) {

                 ?>    

                <div class="carousel-item 

                <?php 
                    
                    if ($i == 0) {
                        echo "active";
                    }

                    $i++;
                ?>">
                    <div class="whatpinstructorcontainer"> 
                        <img src="<?php  echo kdmfi_get_featured_image_src('featured-image-2','full',$page->ID ); ?>"
                          style="width: inherit; height: inherit; border-radius: 50%;">
                     </div>
                    <div class="whatpcontainer">
                        <h3 class="text-center"><?php echo get_post_meta($page->ID,'reviewer',true); ?></h3>
                        <p class="text-center whatpcontainertitle"><?php echo($page->post_title); ?></p>
                        <p class="text-center"><?php

                            $post_object = get_post( $page->ID );
                             echo $post_object->post_content;

                         ?></p>
                    </div>
                </div>
               <?php } ?>
            </div>
           </div> 
        </div>
    </section>