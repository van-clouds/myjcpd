  <section id="footer">
        <div class="row">
            <div class="footer-menu col-xl-4 col-lg-4 col-md-4 ">
                <div class="row">               
                    <div class="footer-icon col-xl-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-1  offset-1"> </div>
                    <span class="footer-menu-1 col-xl-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-1 offset-1"><i class="fa fa-phone"></i>(00) 123 456 789</span>
                    <span class="footer-menu-1 col-xl-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-1  offset-1"><i class="fa fa-envelope"> </i>hello@eduma.com</span>
                    <div class="offset-xl-2 offset-lg-2 offset-md-2 offset-sm-1  offset-1 row footersocialiconrow">
                        
                    </div>

                </div>

            </div>
            <div class="footer-menu-class col-xl-2 col-lg-2 col-md-2  ">
                <h6 class="footer-header">  General </h6>

                <?php
                    wp_nav_menu( array( 
                    'theme_location' => 'my-footer-menu'
                     ) ); 
                 ?>

            </div>
            
             <hr class="col-xl-10 offset-xl-1" >
             <div class="row col-xl-10 offset-xl-1 footercopyright-container">
                 <div class="col-xl-6">
                     Education WordPress Theme by ThimPress. Powered by WordPress.
                 </div>
                 <div class="col-xl-6">
                     <span class="footer-privacy link">Privacy</span>
                     <span class="footer-privacy link">Terms</span>
                     <span class="footer-privacy link">Sitemap</span>
                     <span class="footer-privacy link">Purchase</span>
                 </div>
             </div>
        </div>

    </section>
    
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>

        <?php wp_footer(); ?>

    </body>

</html>

