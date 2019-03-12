<div class="owl-carousel owl-theme">
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
                        //$getAuthorName= get_user_by('ID',$page->post_author);
                        //$displayAuthorName = $getAuthorName->display_name;
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
                    " style="border-radius: 50%;  width: inherit; height: inherit;">
                </div>
                <div class="popularcoursesContent">
                    <p style="margin-top: 35px; font-size: 11px;" class="text-center">
                        <?php echo get_post_meta($page->ID,'instructor',true) ?>
                        
                    </p>
                    <a href=" <?php echo($page->guid); ?> " class="link"><h5 class="text-center">
                        <?php echo($page->post_title); ?></h5></a>
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