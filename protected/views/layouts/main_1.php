<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo Yii::app()->name . " ";
echo isset($this->pageTitle) ? ": " . $this->pageTitle : "";
?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="robots" content="index,follow" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="js/jquery.DEPreLoad.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <!--[if lt IE 8]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-----------Preloader JS-------------------->
        <script>
            $(document).ready(function() {

                setTimeout(function() {
                    $("#depreload .wrapper").animate({opacity: 1});
                }, 400);

                setTimeout(function() {
                    $("#depreload .logo").animate({opacity: 1});
                }, 800);

                var canvas = $("#depreload .line")[0],
                        context = canvas.getContext("2d");

                context.beginPath();
                context.arc(88, 103, 83, Math.PI * 1.5, Math.PI * 1.6);
                context.strokeStyle = '#DABC22';
                context.lineWidth = 5;
                context.stroke();

                var loader = $("body").DEPreLoad({
                    OnStep: function(percent) {
                        console.log(percent + '%');

                        $("#depreload .line").animate({opacity: 1});
                        $("#depreload .perc").text(percent + "%");

                        if (percent > 5) {
                            context.clearRect(0, 0, canvas.width, canvas.height);
                            context.beginPath();
                            context.arc(88, 103, 83, Math.PI * 1.5, Math.PI * (1.5 + percent / 50), false);
                            context.stroke();
                        }
                    },
                    OnComplete: function() {
                        console.log('Everything loaded!');

                        $("body").addClass('remove_overflow');
                        $("#depreload").addClass('loaded_dom');
                        // $("#depreload .perc").text("done");
                        $("#depreload .loading").animate({opacity: 0});
                    }
                });
            });
        </script>
        <!-----------End Preloader JS-------------------->
    </head>
    <?php
    $controller = $this->uniqueid;
    $action = $this->action->Id;
    $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";
    $dataSite = ContentJson::model()->findByAttributes(array('page' => 'home'));
    $dataSite = json_decode($dataSite->data);
    if (isset(Yii::app()->user->id)) {
        $userData = Users::model()->findByPk(Yii::app()->user->id);
        switch ($userData->role) {
            case 1:
                $route = 'student/portal';
                break;
            case 2:
                $route = 'industry/portal';
                break;
            case 3:
                $route = 'institutes/portal';
                break;
            default :
                $route = "";
                break;
        }
    } else {
        $route = "";
    }
    ?>
    <body class="remove_overflow">
<?php if ( $route == 'student/portal' && $controller == "student") { 
    $studentData  = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id)); ;
    $userData  = Users::model()->findByPk( Yii::app()->user->id);
    $json = isset($studentData->profile_json) && !empty($studentData->profile_json)?json_decode($studentData->profile_json):"";
?>
            <div class="student_info_fx">
                <a class="student_profile" href="javascript:void(0);">Student Profile</a>
                <div class="profile_coantainer">
                    <div class="profile_student">
                        <img src="<?php echo isset($json->profile_pic)?"assets/resumes/".$json->profile_pic:"images/defualt_user.jpg"?>"/>
                        <ul class="list-unstyled list-inline">
                            <li><a target="__blank" href="<?php echo isset($json->profile_fb)?$json->profile_fb:"javascript:void(0);"?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="__blank" href="<?php echo isset($json->profile_linked)?$json->profile_linked:"javascript:void(0);"?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="profile_content">
                        <h3><a href="<?php echo Yii::app()->createUrl("student/editprofile");?>"><?php echo Yii::app()->user->name;?><a/></h3>
                        <p>ID: <?php echo $userData->id;?></p>
                        <p>Last Logged in: <?php echo date("d.m.Y",  strtotime($userData->last_login));?></p>
                        <p>Attendance: 80%</p>
                    </div>
                    <div class="resume_studetn">
                        <div class="site_btn"><a class="raised ripple has-ripple" href="javascript:void('0');">Resume </a></div>
                    </div>
                    <h3 class="fcus_hding">Focus Area</h3>
                    <div id="content1-1" class="content">
                        <div class="focus_area">
                            
                            <h2>1) Industry</h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_industry) && !empty($json->profile_industry)){?>
                                <?php foreach ($json->profile_industry as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                                
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>2) Companies</h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_companies) && !empty($json->profile_companies)){?>
                                <?php foreach ($json->profile_companies as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>3) Internship</h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_intership) && !empty($json->profile_intership)){?>
                                <?php foreach ($json->profile_intership as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>4) Live Project</h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_liveproject) && !empty($json->profile_liveproject)){?>
                                <?php foreach ($json->profile_liveproject as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
<?php } ?>
        <div id="depreload" style="background-image:url('../images/bgr.jpg');" class="table">
            <div class="table-cell wrapper">
                <div class="circle">
                    <canvas class="line" width="178px" height="189px"></canvas>
                    <img src="images/preloader.png" class="logo" alt="logo" />
                </div>
                <p class="perc"></p>
                <p class="loading">MBAtrek Loading...</p>
            </div> 
        </div> 
        <div class="full_wrapper ">
            <div class="sticky-container">
                <ul class="sticky">
                    <li>
                        <a href="https://www.facebook.com/MBAtrek-1084606068302037/" target="_blank">
                            <span>Facebook</span>
                            <img width="32" height="32" title="" alt="" src="images/fb1.png" /></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/MBAtrekIndia" target="_blank">
                            <span>Twitter</span>
                            <img width="32" height="32" title="" alt="" src="images/tw1.png" /></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/mbatrek-prviate-ltd." target="_blank">
                            <span>Linkedin</span>
                            <img width="32" height="32" title="" alt="" src="images/li1.png" /></a>
                    </li>
                    <li>

                        <span>RSS</span>
                        <img width="32" height="32" title="" alt="" src="images/rss1.png" />
                    </li>
                    <li>
                        <a href="https://plus.google.com/u/1/100170860140616487906" target="_blank">
                            <span>Google+</span>
                            <img width="32" height="32" title="" alt="" src="images/google_plus.png" /></a>
                    </li>
                    <li class="founder">
                        <a href="https://www.linkedin.com/in/aloksrivastava-mbatrek" target="_blank">
                            <span>Founder</span>
                            <img width="32" height="32" title="" alt="" src="images/social_alok.png" /></a>
                    </li>

                </ul>
            </div>

            <header>
                <nav class="first_header">
                    <ul class="first_link list-unstyled list-inline">
                        <li class="<?php
                            if ($view == 'support') {
                                echo 'active';
                            }
                            ?>"><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'support')) ?>">Have any question?</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo isset($dataSite->Phone_1) ? $dataSite->Phone_1 : ""; ?>,  <?php echo isset($dataSite->Phone_2) ? $dataSite->Phone_2 : ""; ?></a></li>
                        <li><a href="mailto:<?php echo isset($dataSite->Email) ? $dataSite->Email : ""; ?>"><i class="fa fa-envelope" aria-hidden="true"></i>  <?php echo isset($dataSite->Email) ? $dataSite->Email : ""; ?></a></li>
                    </ul>
                    <!-- Navigation for Desktop-->
                    <ul class="second_link list-unstyled list-inline">
                        <li class="download_brochers <?php
                        if ($action == 'download') {
                            echo 'active';
                        }
                        ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => "download_ebrochersform")); ?>">	Download E-Brochure</a> </li>
                            <!-- <li><a href="signup_student.html">Register</a><span></span></li> -->
<?php if (Yii::app()->user->isGuest) { ?>
                            <li class="<?php
    if ($action == 'login') {
        echo 'active';
    }
    ?>"><a href="<?php echo Yii::app()->createUrl('site/login') ?>">Login</a><span></span></li>
                                <?php } else { ?>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="login.html">
                                    <div class="profile_imge">
                                        <img src="images/who_We_1.png">
                                            <label><?php echo Yii::app()->user->name; ?></label>
                                    </div>
                                </a><span></span>
                                <ul class="dropdown-menu">
    <?php if (Yii::app()->user->name == "Administrator User") { ?>
                                        <li><a href="<?php echo Yii::app()->createUrl("users/admin") ?>">Control Panel</a></li>
                            <?php } else { ?>
                                        <li><a href="<?php echo Yii::app()->createUrl($route) ?>">My Account</a></li>
                            <?php } ?>

                                    <li><a href="#">My Courses</a></li>
                                    <li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">Logout</a></li>
                                </ul>
                            </li>
<?php } ?>
                        <li class="<?php
if ($action == 'contact') {
    echo 'active';
}
?>"><a href="<?php echo Yii::app()->createUrl('site/contact') ?>">Contact Us</a><span></span></li>
                        <li class="<?php
if ($view == 'quick_links') {
    echo 'active';
}
?>"><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'quick_links')) ?>">Quick Links <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- End Navigation for Desktop -->
                    <div class="ssm-overlay ssm-toggle-nav"></div>
                    <!-- Navigation for mobile Devices -->
                    <nav class="menu_list">
                        <div class="menu_wrpper">
                            <ul class="list-unstyled">
                                <li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/index'); ?>"><i class="fa fa-home" aria-hidden="true"></i>
                                        Home</a></li>
                                <li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => "download_ebrochersform")); ?>"><i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        Download E-Brochure
                                    </a></li>
                                        <?php if (Yii::app()->user->isGuest) { ?>
                                    <li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/login') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                                        <?php } else { ?>

                                    <li class="dropdown"><a  data-toggle="dropdown" class="dropdown-toggle raised ripple" href="#">
                                            <div class="profile_imge">
                                                <img src="images/who_We_1.png">
                                                    <label><?php echo Yii::app()->user->name; ?><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu">
                                    <?php if (Yii::app()->user->name == "Administrator User") { ?>
                                                <li><a href="<?php echo Yii::app()->createUrl("user/admin") ?>">Control Panel</a></li>
                                        <?php } else { ?>
                                                <li><a href="<?php echo Yii::app()->createUrl($route) ?>">My Account</a></li>
                                    <?php } ?>
                                            <li><a href="#">My Courses</a></li>
                                            <li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">Logout</a></li>
                                        </ul>
                                    </li>
                                    <?php } ?>
                            <!-- <li><a class="raised ripple" href="signup_student.html"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li> -->
                                <li class="<?php
                                    if ($view == 'quick_links') {
                                        echo 'active';
                                    }
                                    ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/contact') ?>"><i class="fa fa-mobile" aria-hidden="true"></i> Contact Us</a></li>
                                <li class="<?php
                                if ($view == 'quick_links') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'quick_links')) ?>"><i class="fa fa-link" aria-hidden="true"></i> Quick Links</a></li>
                                <div class="spepration_line"></div>
                                <li class="<?php
                                if ($view == 'who_we_are') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'who_we_are')) ?>"><i class="fa fa-users" aria-hidden="true"></i> Who We are</a></li>
                                <li class="<?php
                                if ($view == 'what_we_do') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'what_we_do')) ?>"><i class="fa fa-users" aria-hidden="true"></i> What We Do</a></li>
                                <li class="<?php
                                if ($view == 'our_bielf') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'our_bielf')) ?>"><i class="fa fa-university" aria-hidden="true"></i> Our Belief</a></li>
                                <li class="<?php
                                if ($view == 'quick_links') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'career')) ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Careers</a></li>
                                <li class="<?php
                                if ($view == 'career') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="javascript:void(0);"><i class="fa fa-bold" aria-hidden="true"></i> Blog</a></li>
                                <li class="<?php
                                if ($view == 'support') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'support')) ?>"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a></li>
                                <li class="<?php
                                if ($view == 'quick_lsdsdinks') {
                                    echo 'active';
                                }
                                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'feedback')) ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Feedback</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navigation for mobile Devices -->
                </nav>   
                <nav class="main_navigation">
                    <div class="col-md-3 col-sm-5 col-xs-6">
                        <div  class="logo_div"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><img class="img-responsive" src="images/logo.png"></a></div>   
                    </div>
                    <div class="col-md-9 col-sm-7 col-xs-6">
                        <div class="menu_responisve">
                            <div class="menu_icon">
                                <a href="javascript:void(0);" class="ssm-toggle-nav" title="open nav">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                        <g>
                                            <line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="4.8" x2="24" y2="4.8"/>
                                            <line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="12" x2="24" y2="12"/>
                                            <line fill="none" stroke="#569145" stroke-width="1.7" stroke-miterlimit="10" x1="0" y1="19.2" x2="24" y2="19.2"/>
                                        </g>
                                        <rect x="0" y="0" fill="none" width="24" height="24"/>
                                    </svg>
                                    <label>Menu</label>
                                </a>
                            </div>
                        </div>
                        <div class="navBox">
                            <ul>
                                <li  class="<?php
                                if ($action == 'index') {
                                    echo 'active';
                                }
                                ?>"> <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a></li>
                                <li  class="<?php
                                if ($view == 'who_we_are') {
                                    echo 'active';
                                }
                                ?>" > <a class="raised ripple active" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'who_we_are')) ?>">Who We Are</a>
                                    <!-- <ul class="dropNav">
                                          <li><a href="#">item2-1</a></li>
                                          <li><a href="#">item2-2</a></li>
                                          <li><a href="#">item2-1</a></li>
                                          <li><a href="#">item2-1</a></li>
                                          <li><a href="#">item2-1</a></li>
                                    </ul>  -->
                                </li>
                                <li class="<?php
                if ($view == 'what_we_do') {
                    echo 'active';
                }
                                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'what_we_do')) ?>">What We Do</a></li>
                                <li class="<?php
                            if ($view == 'our_bielf') {
                                echo 'active';
                            }
                            ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'our_bielf')) ?>">Our Belief</a> </li>
                                <li class="<?php
                        if ($view == 'career') {
                            echo 'active';
                        }
                        ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'career')) ?>">Careers</a> </li>
                                <li> <a class="raised ripple" href="javascript:void(0);">Blog</a> </li>
                                <li class="<?php
                        if ($view == 'support') {
                            echo 'active';
                        }
                        ?>"> <a  class="raised ripple"href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'support')) ?>">Support</a> </li>
                                <li class="<?php
                        if ($view == 'feedback') {
                            echo 'active';
                        }
                        ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'feedback')) ?>">Feedback</a> </li>

                            </ul>
                        </div>
                    </div> 
                </nav> 
            </header>
            <article>
<?php echo $content; ?>
            </article>
            <footer class="footer_container">
                <div class="container">
                    <div class="footer_logo">
                        <img src="images/footer_logo.png">  
                    </div>
                    <ul class="list-inline list-unstyled">
                        <li class="<?php
if ($view == 'copyright_notice') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'copyright_notice')) ?>">Copyright Notice</a></li>
                        <li class="<?php
if ($view == 'privacy_policy') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'privacy_policy')) ?>"> Privacy Statement</a></li>
                        <li class="<?php
if ($view == 'declimier') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'declimier')) ?>">Disclaimer</a></li>
                        <li class="<?php
if ($view == 'terms_conditions') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'terms_conditions')) ?>">Terms & Conditions</a></li>
                        <li class="<?php
if ($view == 'asasa') {
    echo 'active';
}
?>" ><a href="javascript:void(0);">Talk to Career Advisor </a></li>
                        <li class="<?php
if ($view == 'quick_links') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'quick_links')) ?>" class="">Sitemap</a></li>
                        <li class="<?php
if ($view == 'faq') {
    echo 'active';
}
?>" ><a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'faq')) ?>" class="">FAQ'S</a></li>
                    </ul>
                    <div class="line_div"></div>
                    <div class="copy_ryt">
                        <p>&copy Copyright 2016 MBAtrek <em>TM</em>.&nbsp; All rights reserved.</p>
                    </div> 
                    <div class="social_media">
                        <h4>Connect With Us</h4>
                        <ul class="list-inline list-unstyled">
                            <li><a href="https://www.facebook.com/MBAtrek-1084606068302037/" target="_blank" ><span></span></a></li>
                            <li class="linkedin_icon"><a href="https://twitter.com/MBAtrekIndia" target="_blank" ><span></span></a></li>
                            <li class="twiter_icon"><a href="https://www.linkedin.com/company/mbatrek-prviate-ltd."  target="_blank"><span></span></a></li>
                            <li class="google"><a href="https://plus.google.com/u/1/100170860140616487906" target="_blank" ><span></span></a></li>
                            <!--<li class="print"><a href="javascript:void(0);" ><span></span></a></li>-->
                        </ul>
                    </div>
                </div>
                <div id="myModalemail" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter valid email address!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalpassword" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter password!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalfname" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter first name!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalComingSoon" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3></h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i>Coming Soon</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalPhone" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter Phone number!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalname" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter name!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModallname" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter last name!</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalmessage" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error !</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter a valid message.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalthank" class="modal success" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Thanks</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Thanks for your feedback</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalthankBook" class="modal success" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Thanks</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Thanks for your feedback.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalthankc" class="modal success" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Thanks</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> We have received your query. Will get in touch soon.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalSubject" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i>  Please enter a valid subject.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalTxtMsg" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i>  Please enter a message.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalCity" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i>  Please select a valid city.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalNoImage" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> Sorry no brochure available.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalQuizError" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p id="message_errors">Sorry no brochure available.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalBookName" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p id="message_errors"><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter a valid book name.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalAuthor" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p id="message_errors"><i class="fa fa-warning" aria-hidden"true"=""></i> Please enter a valid author name.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalSubjectBook" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p id="message_errors"><i class="fa fa-warning" aria-hidden"true"=""></i> Please select a subject.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalBookFile" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p id="message_errors"><i class="fa fa-warning" aria-hidden"true"=""></i> Please upload a pdf file..</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalSuccess" class="modal success" data-easein="pulse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Success</h3>
                                    <div class="error_wrap">
                                        <div class="error_container">
                                            <p><i class="fa fa-warning" aria-hidden"true"=""></i> You have been successfully registered, Please check you email.</p>
                                        </div>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myModalclient" class="modal" data-easein="shake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row">
                            <div class="modal-body">
                                <div class="md-content">
                                    <h3>Error</h3>
                                    <div class="error_wrap">
<?php
if (isset($this->errors) && count($this->errors) > 0) {

    foreach ($this->errors as $key => $error) {
        ?>
                                                <div class="error_container">
                                                    <p><i class="fa fa-warning" aria-hidden"true"=""></i> <?php echo $error; ?></p>
                                                </div>
    <?php }
}
?>
                                        <!-- <button class="md-close">OK</button> -->
                                        <div class="main_register"><div class="site_btn"><a  data-dismiss="modal"class="raised ripple close" href="javascript:void(0);">OK</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </footer> 
        </div>
        <script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.materialripple.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/jquery.goup.js"></script>
	<script src="js/jquery.slideandswipe.js"></script>
	<script src="js/jquery.mCustomScrollbar.js"></script>
	<script src="js/canvasjs.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.viewbox.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/velocity.ui.min.js"></script>
	<script src="js/jquery.date-dropdowns.js"></script>
        <script type="text/javascript">
	window.onload = function () {
                <?php if($controller == "institutes" && $action == "portal"){
                        $data['institute'] = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
                        foreach ($data['institute']->institute->instituteCourses[0]->instituteBatches as $keyBatch => $batch) {
                            $dataMontl = PresentMonthly::model()->findAllByAttributes(array("institute_batch_id" =>$batch->id));
                            $datPer = array();
                            $datPer2 = array();
                            foreach ($dataMontl as $dataM) {
                                $datPer[$dataM->date] = $dataM->total_present;
                            }
                            $dataAll = AllMonthly::model()->findAllByAttributes(array("institute_batch_id" =>$batch->id));
                            foreach ($dataAll as $dataM) {
                                $datPer2[$dataM->date] = $dataM->total_students;
                            }
                            foreach ($datPer as $kq=>$dataM) {
                                $datPer[$kq] = $dataM / $datPer2[$kq] * 100;
                            }
                            $opts = array();
                            foreach ($datPer as $k=>$d) {
                                $opts[] = array("label"=>$k,"y"=>$d);
                            }
                ?>
                         new CanvasJS.Chart("chartContainer"+<?php echo $batch->id?>,
                        {
                                title:{
                                        //text: "Gaming Consoles Sold in 2012"
                                },
                                                animationEnabled: true,
                                legend:{
                                        verticalAlign: "bottom",
                                        horizontalAlign: "center"
                                },
                                data: [
                                {        
                                        indexLabelFontSize: 13,
                                        //indexLabelFontFamily: "arial",       
                                        indexLabelFontColor: "white", 
                                        indexLabelLineColor: "darkgrey",        
                                        indexLabelPlacement: "inside",
                                        type: "column",       
                                        showInLegend: false,
                                        toolTipContent: "{y}%</strong>",
                                        dataPoints: <?php echo json_encode($opts);?>
                                }
                                ]
                        }).render();
                         new CanvasJS.Chart("chartContainer"+<?php echo $batch->id+1?>,
                        {
                                title:{
                                        //text: "Gaming Consoles Sold in 2012"
                                },
                                                animationEnabled: true,
                                legend:{
                                        verticalAlign: "bottom",
                                        horizontalAlign: "center"
                                },
                                data: [
                                {        
                                        indexLabelFontSize: 13,
                                        //indexLabelFontFamily: "arial",       
                                        indexLabelFontColor: "white", 
                                        indexLabelLineColor: "darkgrey",        
                                        indexLabelPlacement: "inside",
                                        type: "column",       
                                        showInLegend: false,
                                        toolTipContent: "{y}%</strong>",
                                        dataPoints: <?php echo json_encode($opts);?>
                                }
                                ]
                        }).render();
                        
                            
                <?php        }
                 ?>
                <?php }?>
		
		var chart2 = new CanvasJS.Chart("chartContainer3",
		{
			title:{
				//text: "Gaming Consoles Sold in 2012"
			},
					animationEnabled: true,
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center"
			},
			data: [
			{        
				indexLabelFontSize: 13,
				//indexLabelFontFamily: "arial",       
				indexLabelFontColor: "white", 
				indexLabelLineColor: "darkgrey",        
				indexLabelPlacement: "inside",
				type: "column",       
				showInLegend: false,
				toolTipContent: "{y}%</strong>",
				dataPoints: [
                                        { x: 10, y: 10 },
                                        { x: 20, y: 11 },
                                        { x: 30, y: 14 },
                                        { x: 40, y: 16 },
                                        { x: 50, y: 19 },
                                        { x: 60, y: 15 },
                                        { x: 70, y: 12 },
                                        { x: 80, y: 10 }
                                ]
			}
			]
		});
//		chart.render();
		chart2.render();
		
		
}
</script>
        <script>
            function validateEmail(emailField) {
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                if (reg.test(emailField) == false)
                {

                    return false;
                }

                return true;

            }
            function getExtension(path) {
                var basename = path.split(/[\\/]/).pop(),  // extract file name from full path ...
                                                           // (supports `\\` and `/` separators)
                    pos = basename.lastIndexOf(".");       // get last position of `.`

                if (basename === "" || pos < 1)            // if file name is empty or ...
                    return "";                             //  `.` not found (-1) or comes first (0)

                return basename.slice(pos + 1);            // extract extension ignoring `.`
            }
            function openComingSoon() {
                $('#myModalComingSoon').modal('show');
            }
            $(document).ready(function() {
                $("#example10").dateDropdowns({
                    submitFieldName: 'example10',
                    required: true
                });
                $('.menu_list').slideAndSwipe();
                $("#industry-form").submit(function() {
                    if ($("#Users_email").val() == "" || !validateEmail($("#Users_email").val())) {
                        $("#Users_email").focus()
                        $('#myModalemail').modal('show');
                        return false;
                    }
                    if ($("#Users_password").val() == "") {
                        $("#Users_password").focus()
                        $('#myModalpassword').modal('show');
                        return false;
                    }
                    if ($("#Users_fname").val() == "") {
                        $("#Users_fname").focus()
                        $('#myModalfname').modal('show');
                        return false;
                    }
                    if ($("#Users_lname").val() == "") {
                        $("#Users_lname").focus()
                        $('#myModallname').modal('show');
                        return false;
                    }
                });
                $("#mba-student-form").submit(function() {
                    if ($("#Users_email").val() == "" || !validateEmail($("#Users_email").val())) {
                        $("#Users_email").focus()
                        $('#myModalemail').modal('show');
                        return false;
                    }
                    if ($("#Users_password").val() == "") {
                        $("#Users_password").focus()
                        $('#myModalpassword').modal('show');
                        return false;
                    }
                    if ($("#Users_fname").val() == "") {
                        $("#Users_fname").focus()
                        $('#myModalfname').modal('show');
                        return false;
                    }
                    if ($("#Users_lname").val() == "") {
                        $("#Users_lname").focus()
                        $('#myModallname').modal('show');
                        return false;
                    }
                });
                $("#login-form").submit(function() {
                    if ($("#LoginForm_username").val() == "" || !validateEmail($("#LoginForm_username").val())) {
                        $("#LoginForm_username").focus()
                        $('#myModalemail').modal('show');
                        return false;
                    }
                    if ($("#LoginForm_password").val() == "") {
                        $("#LoginForm_password").focus()
                        $('#myModalpassword').modal('show');
                        return false;
                    }
                });
                $("#ebroucher-download-form-form").submit(function() {
                    if ($("#EbroucherDownloadForm_email").val() == "" || !validateEmail($("#EbroucherDownloadForm_email").val())) {
                        $("#EbroucherDownloadForm_email").focus()
                        $('#myModalemail').modal('show');
                        return false;
                    }
                    if ($("#EbroucherDownloadForm_first_name").val() == "") {
                        $("#EbroucherDownloadForm_first_name").focus()
                        $('#myModalfname').modal('show');
                        return false;
                    }
                    if ($("#EbroucherDownloadForm_last_name").val() == "") {
                        $("#EbroucherDownloadForm_last_name").focus()
                        $('#myModallname').modal('show');
                        return false;
                    }
                    var win = window.open('');
                    window.oldOpen = window.open;
                    window.open = function(url) { // reassignment function
                        win.location = url;
                        window.open = oldOpen;
                        win.focus();
                    }
                    $.ajax({
                        type: 'post',
                        data: {
                            "EbroucherDownloadForm[email]": $("#EbroucherDownloadForm_email").val(),
                            "EbroucherDownloadForm[first_name]": $("#EbroucherDownloadForm_first_name").val(),
                            "EbroucherDownloadForm[last_name]": $("#EbroucherDownloadForm_last_name").val(),
                            "EbroucherDownloadForm[phone_number]": $("#EbroucherDownloadForm_phone_number").val()
                        },
                        success: function(data) {
                            var decodedData = $.parseJSON(data);
//                                alert(decodedData);
                            window.open(decodedData.url, '_blank');
                            window.location.href = "<?php echo Yii::app()->createUrl("site/index") ?>"
                        }
                    });
                    return false;
                });
                $("#feedback-form").submit(function() {
                    if ($("#Feedback_email").val() != "") {
                        if (!validateEmail($("#Feedback_email").val())) {
                            $("#Feedback_email").focus()
                            $('#myModalemail').modal('show');
                            return false;
                        }
                    }
                    if ($("#Feedback_message").val() == "") {
                        $("#Feedback_message").focus()
                        $('#myModalmessage').modal('show');
                        return false;
                    }
                });
                $("#submit_library_book").click(function(){
                    if ($("#book-name").val() == "") {
                        $("#book-name").focus()
                        $('#myModalBookName').modal('show');
                        return false;
                    }
                    if ($("#book-author").val() == "") {
                        $("#book-author").focus()
                        $('#myModalAuthor').modal('show');
                        return false;
                    }
                    if ($("#book-subject").val() == "") {
                        $("#book-subject").focus()
                        $('#myModalSubjectBook').modal('show');
                        return false;
                    }
                    if ($("#books-file").val() == "") {
                        $("#books-file").focus()
                        $('#myModalBookFile').modal('show');
                        return false;
                    }
                    // get the file name, possibly with path (depends on browser)
                    var filename = $("#books-file").val();

                    // Use a regular expression to trim everything before final dot
                    var extension = filename.replace(/^.*\./, '');

                    // Iff there is no dot anywhere in filename, we would have extension == filename,
                    // so we account for this possibility now
                    if (extension == filename) {
                        extension = '';
                    } else {
                        // if there is an extension, we convert to lower case
                        // (N.B. this conversion will not effect the value of the extension
                        // on the file upload.)
                        extension = extension.toLowerCase();
                    }
                    if (extension != "pdf") {
                        $("#books-file").focus()
                        $('#myModalBookFile').modal('show');
                        return false;
                    }
                    $("#filter-form-library").submit();
                   
                });
                $("#filter-batch").change(function() {
                    $("#filter-form-attendance").submit();
                })
                $("#filter-module").change(function() {
                    $("#filter-form-attendance").submit();
                })
                $("#filter-batch-score").change(function() {
                    $("#filter-form-score").submit();
                })
                $("#filter-module-score").change(function() {
                    $("#filter-form-score").submit();
                })
                $("#filter-module-interationlanding").change(function() {
                    $("#filter-form-interationlanding").submit();
                })
                $("#id-past").change(function() {
                    $("#filter-form-interationlanding-pas").submit();
                })
                $("#functions-casestudy").change(function() {
                    $("#filter-form-casestudy").submit();
                })
                $("#module-assignments").change(function() {
                    $("#filter-form-assigment").submit();
                })
                
                $("#submit-quiz-case").click(function(){
                    var jsonObj = [];
                    $(".quize_question_all").each(function(i, obj){
                        if ($(this).is(":checked")) {
                            var quizid = $(this).attr('src');
                            var answer = $(this).attr('value');
                            var item = {}
                            item ["question_id"] = quizid;
                            item ["answer_id"] = answer;
                            jsonObj.push(item);
                        }
                    });
                    var casestudy_id = $("#casestudy_id").val();
                    $.ajax({
                        url: '<?php echo Yii::app()->createUrl('student/checkCaseStudyAnswer');?>',
                        type : 'post',
                        data : {
                            'answers' : jsonObj,
                            'casestudy_id' : casestudy_id
                        },
                        success : function(data) {  
                            var decodedData = $.parseJSON(data);
                            if (decodedData.status == "success") {
                                $("#total_answered").html(decodedData.data.question_answered);
                                $("#total_correct").html(decodedData.data.correct);
                                $("#score").html(decodedData.data.student_score);
                                $("#total_score").html(decodedData.data.total_score);
                                $("#myModal1").modal('show');
                            } else {
                                $("#message_errors").html(decodedData.msg);
                                $("#myModalQuizError").modal('show');
                            }
                            
                        }
                    })
                    
                    
                })
                $("#check-close").click(function(){
                    if (!confirm("Are you sure you want to close this assigment? No further changes will be allowed.")) {
                        return false;
                    }
                });
                $("#submit-quiz-assigment").click(function(){
                    var jsonObj = [];
                    $(".quize_question_all").each(function(i, obj){
                        if ($(this).is(":checked")) {
                            var quizid = $(this).attr('src');
                            var answer = $(this).attr('value');
                            var item = {}
                            item ["question_id"] = quizid;
                            item ["answer_id"] = answer;
                            jsonObj.push(item);
                        }
                    });
                    var assigment_id = $("#assigment_id").val();
                    $.ajax({
                        url: '<?php echo Yii::app()->createUrl('student/checkAssigmentAnswer');?>',
                        type : 'post',
                        data : {
                            'answers' : jsonObj,
                            'assigment_id' : assigment_id
                        },
                        success : function(data) {  
                            var decodedData = $.parseJSON(data);
                            if (decodedData.status == "success") {
                                $("#total_answered").html(decodedData.data.question_answered);
                                $("#total_correct").html(decodedData.data.correct);
                                $("#score").html(decodedData.data.student_score);
                                $("#total_score").html(decodedData.data.total_score);
                                $("#myModal1").modal('show');
                            } else {
                                $("#message_errors").html(decodedData.msg);
                                $("#myModalQuizError").modal('show');
                            }
                            
                        }
                    })
                    
                    
                })
                $("#contact-form").submit(function() {
                    if ($("#Contact_email").val() == "" || !validateEmail($("#Contact_email").val())) {
                        $("#Contact_email").focus()
                        $('#myModalemail').modal('show');
                        return false;
                    }
                    if ($("#Contact_name").val() == "") {
                        $("#Contact_name").focus()
                        $('#myModalname').modal('show');
                        return false;
                    }
                    if ($("#Contact_phone").val() == "") {
                        $("#Contact_phone").focus()
                        $('#myModalPhone').modal('show');
                        return false;
                    }
                    if ($("#Contact_subject").val() == "") {
                        $("#Contact_subject").focus()
                        $('#myModalSubject').modal('show');
                        return false;
                    }
                    if ($("#Contact_message").val() == "") {
                        $("#Contact_message").focus()
                        $('#myModalTxtMsg').modal('show');
                        return false;
                    }
                });
                $("#submit_library_profile").click(function() {
                    $("#filter-form-profile").submit();
                })
<?php if (isset($_REQUEST['thank']) && $_REQUEST['thank'] == 1) { ?>

                    $("#myModalthank").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankBook']) && $_REQUEST['thankBook'] == 1) { ?>

                    $("#myModalthankBook").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankc']) && $_REQUEST['thankc'] == 1) { ?>

                    $("#myModalthankc").modal('show');

<?php } ?>
<?php if (isset($this->errors) && count($this->errors) > 0) { ?>

                    $("#myModalclient").modal('show');

<?php } ?>
<?php if (isset($this->success) && count($this->success) > 0) { ?>
                    $("#myModalSuccess").modal('show');
                    window.setTimeout(function() {
                        location.href = "<?php echo Yii::app()->createUrl('site/index'); ?>";
                    }, 2500);
<?php } ?>

            });

        </script>
        <script type="text/javascript">


        </script>
        <script>
	$('#add_more_link').click(function() {
		$('.industry_field:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="industry" name="profile_industry[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
		});
		
		$('#company_more').click(function() {
		$('.company_filed:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Companies" name="profile_companies[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
		});
		
		$('#internship_link').click(function() {
		$('.internship_filed:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Internship" name="profile_intership[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
		});
		
		$('#live_linkd').click(function() {
		$('.live_project:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Live Project" name="profile_liveproject[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
		});
		
		$('.edit_profile_form').on('click','.remove_link',function() {
	//	alert('hi');
			$(this).parent().remove();
		});
		
	</script>
    </body>
</html>
