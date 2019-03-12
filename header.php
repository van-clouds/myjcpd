<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    

    <?php wp_head(); ?>

</head>

<body style="overflow-x:hidden;">
        <section id="<?php 
         if (get_the_id()==1) {
            echo "home";
         }
         else {
            echo "coursesHero";
         }

       ?>" >
            <div class="row" style="height:auto;background-color:#111111;color:rgb(250,251,252);padding-left:30px; font-family: 'Roboto Slab', serif; display: flex;">
                <div class="col-xl-5 offset-xl-0 col-md-5 col-sm-5 col-lg-5 col-6" style="height:auto;">
                    <p class="text-white" style="height:auto;font-size:12px;margin-bottom:0px;"><br><strong>Have any question? &nbsp; <i style="padding:0px 13px 0px 13px;" class="fa fa-phone"></i>(00) 123 456 789 <i style="padding:0px 13px 0px 13px;" class="fa fa-envelope"> </i>hello@eduma.com </strong><br><br></p>
                </div>
                <div class="col-xl-2 offset-xl-5 offset-sm-3 offset-md-3 col-6 col-md-2 col-sm-2 col-lg-2 d-flex align-items-center">
                    <?php 
                        if (is_user_logged_in()) {
                            $user = wp_get_current_user();
                    ?>
                        <strong><?php echo "Welcome, ".$user->display_name ; ?></strong>
                    <?php 
                        }
                     else { 

                    ?>
                    <strong>
                        <a class="text-white lrm-signup" href="#" style="font-size:11px;margin-left:20px;margin-right:20px;">Register</a>
                    </strong>
                    <p style="font-size:19px;margin-top:11px;color:rgba(250,251,252,0.29);">|</p>
                    <strong>
                        <a class="text-center lrm-login"  href="#" style="font-size:11px;margin-left:20px;">Login</a>
                    </strong>
                <?php } ?>
                </div>
            </div>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="<?php echo site_url()  ?>" style="background-image:url(&quot;assets/img/logo.png&quot;);width:194px;height:60px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1" style="margin-left: 25%;">
                        <ul class="nav navbar-nav">
                            <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                <span><a href="<?php echo site_url(); ?>">HOME</a></span>
                           </div>
                          <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                <span>COURSES</span>
                                <ul class="dropdown1" style="padding-left: 0px">
                                    <?php
                                       /*  wp_list_pages (array(
                                            'title_li'=> '',
                                        ) )*/
                                         wp_nav_menu( array( 
                                            'theme_location' => 'my-header-menu', 
                                             ) );
                                     ?>
                                </ul>
                            </div>

                        </ul>
                </div>
                </div>
            </nav>

            <!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                             <h5 class="modal-title text-center" id="exampleModalLongTitle">Login with your site account</h5>
                        </div>
                         <div class="modal-body">
                                <form class="userInfo col-xl-10 offset-xl-1">
                                    <input type="text" name="username" class="userFieldInput" placeholder="Username or Email">
                                    <input type="password" name="password" class="userFieldInput" placeholder="Password">
                                    <div class="userFieldInput_row1">
                                        <input type="checkbox" name="remember_me"> Remember Me 
                                        <a href="" style="padding-left: 60px;">Lost your password</a>
                                    </div>
                                    <input type="button" name="" class="login text-center" style="display: block;" value="LOGIN">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                             <h5 class="modal-title text-center" id="exampleModalLongTitle">Register</h5>
                        </div>
                         <div class="modal-body">
                                <form class="userInfo col-xl-10 offset-xl-1">
                                    <input type="text" name="username" class="userFieldInput" placeholder="Username">
                                     <input type="email" name="email" class="userFieldInput" placeholder="Email">
                                    <input type="password" name="password" class="userFieldInput" placeholder="Password">
                                    <input type="password" name="password" class="userFieldInput" placeholder="Confirm Password">

                                   
                                    <input type="button" name="" class="login text-center" style="display: block;" value="REGISTER">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div> -->

     
    

