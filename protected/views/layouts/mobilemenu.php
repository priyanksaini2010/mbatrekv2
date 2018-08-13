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
                $studentData  = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id)); ;
                $json = isset($studentData->profile_json) && !empty($studentData->profile_json)?json_decode($studentData->profile_json):"";
                $im = isset($json->profile_pic)&& $json->profile_pic != ""? Yii::app()->baseUrl."/assets/resumes/".$json->profile_pic:Yii::app()->baseUrl."/images/defualt_user.jpg" ;
                break;
            case 2:
                $route = 'institutes/portal';
                $im = Yii::app()->baseUrl."/images/who_We_1.png" ;
                break;
            case 3:
                $route = 'industry/portal';
                $industryProfile =  IndustryUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
                $im = Yii::app()->baseUrl."/assets/companylogo/".$industryProfile->industry->founder_image ;
                break;
            default :
                $route = "";
                break;
        }
    } else {
        $route = "";
    }
    ?>
<nav class="first_header">
    <ul class="first_link list-unstyled list-inline">
        <li class="<?php
        if ($view == 'support') {
            echo 'active';
        }
        ?>"><a href="<?php echo Yii::app()->createUrl('support') ?>">Have any question?</a></li>
        <li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo isset($dataSite->Phone_1) ? $dataSite->Phone_1 : ""; ?>,  <?php echo isset($dataSite->Phone_2) ? $dataSite->Phone_2 : ""; ?></a></li>
        <li><a href="mailto:<?php echo isset($dataSite->Email) ? $dataSite->Email : ""; ?>"><i class="fa fa-envelope" aria-hidden="true"></i>  <?php echo isset($dataSite->Email) ? $dataSite->Email : ""; ?></a></li>
    </ul>
    <!-- Navigation for Desktop-->
    <ul class="second_link list-unstyled list-inline">
        <li class="download_brochers sub-menu-parent <?php
			if ($action == 'download') {
				echo 'active';
			}
			?>"> <a class="raised ripple" href="javascript:void(0);">	Download <i class="fa fa-angle-down" aria-hidden="true"></i></a>
			<ul class="sub-menu list-unstyled">
				<li><a href="<?php echo Yii::app()->createUrl('e-brouchers'); ?>">Brochures</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("videos"); ?>">Videos</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("articles"); ?>">Articles</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("handbook"); ?>">Handbook</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("success-story"); ?>">Success Stories</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("event-gallery"); ?>">Events Gallery</a></li>
			</ul>
		</li>
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
                        <img src="<?php echo $im;?>">
                        <label><?php echo Yii::app()->user->name; ?></label>
                    </div>
                </a><span></span>
                <ul class="dropdown-menu">
                    <?php if (Yii::app()->user->name == "Administrator User") { ?>
                        <li><a href="<?php echo Yii::app()->createUrl("users/admin") ?>">Control Panel</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo Yii::app()->createUrl($route) ?>">Home</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl("site/changepassword") ?>">Change Password</a></li>
			<?php if($userData->role == 1){?>
			<li><a href="<?php echo Yii::app()->createUrl('student/adddocuments'); ?>">Add Document</a></li>
			<?php } ?>
                    <?php } ?>

                    <!--<li><a href="#">My Courses</a></li>-->
                    <li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">Logout</a></li>
                </ul>
            </li>
        <?php } ?>
        <li class="<?php
        if ($action == 'contact') {
            echo 'active';
        }
        ?>"><a href="<?php echo Yii::app()->createUrl('site/contact') ?>">Contact Us</a><span></span></li>
<!--        <li class="<?php
        if ($view == 'quick_links') {
            echo 'active';
        }
        ?>">
	    <a href="<?php echo Yii::app()->createUrl('site/page', array('view' => 'quick_links')) ?>">Quick Links <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>-->
    </ul>
    <!-- End Navigation for Desktop -->
    <div class="ssm-overlay ssm-toggle-nav"></div>
    <!-- Navigation for mobile Devices -->
    <nav class="menu_list">
        <div class="menu_wrpper">
            <ul class="list-unstyled">
                <li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/index'); ?>"><i class="fa fa-home" aria-hidden="true"></i>
                        Home</a></li>
                <li class="dropdown">
					<a class="raised ripple" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-cloud-download" aria-hidden="true"></i>
                        Download <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->createUrl("e-brouchers"); ?>">Brochures</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("videos"); ?>">Videos</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("articles"); ?>">Articles</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("handbook"); ?>">Handbook</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("articles"); ?>">Success Stories</a></li>
						<li><a href="<?php echo Yii::app()->createUrl('event-gallery'); ?>">Events Gallery</a></li>
					</ul>
				</li>
                <?php if (Yii::app()->user->isGuest) { ?>
                    <li><a class="raised ripple" href="<?php echo Yii::app()->createUrl('site/login') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                <?php } else { ?>

                    <li class="dropdown"><a  data-toggle="dropdown" class="dropdown-toggle raised ripple" href="#">
                            <div class="profile_imge">
                                <img src="<?php echo $im;?>">
                                <label><?php echo Yii::app()->user->name; ?><i class="fa fa-angle-down" aria-hidden="true"></i></label>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (Yii::app()->user->name == "Administrator User") { ?>
                                <li><a href="<?php echo Yii::app()->createUrl("user/admin") ?>">Control Panel</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo Yii::app()->createUrl($route) ?>">Home</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl("site/changepassword") ?>">Change Pasword</a></li>
				<?php if($userData->role == 1){?>
				<li><a href="<?php echo Yii::app()->createUrl('student/adddocuments'); ?>">Add Document</a></li>
				<?php } ?>
                            <?php } ?>
                            <!--<li><a href="#">My Courses</a></li>-->
                            <li class="last_li"><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php } ?>
        <!-- <li><a class="raised ripple" href="signup_student.html"><i class="fa fa-user" aria-hidden="true"></i> Register</a></li> -->
                <li class="<?php
                if ($view == 'quick_links') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('contact-us') ?>"><i class="fa fa-mobile" aria-hidden="true"></i> Contact Us</a></li>
<!--                <li class="<?php
                if ($view == 'quick_links') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('sitemap') ?>"><i class="fa fa-link" aria-hidden="true"></i> Quick Links</a></li>-->
                <div class="spepration_line"></div>
                <li class="<?php
                if ($view == 'who_we_are') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('who-we-are') ?>"><i class="fa fa-users" aria-hidden="true"></i> Who We are</a></li>
                <li class="<?php
                if ($view == 'what_we_do') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('what-we-do') ?>"><i class="fa fa-users" aria-hidden="true"></i> What We Do</a></li>
                <li class="<?php
                if ($view == 'our_bielf') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('what-we-believe') ?>"><i class="fa fa-university" aria-hidden="true"></i> Our Belief</a></li>
                <li class="<?php
                if ($view == 'quick_links') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('career') ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Careers</a></li>
                <li class="<?php
                if ($action == 'blogs') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('blogs') ?>"><i class="fa fa-bold" aria-hidden="true"></i> Blog</a></li>
                <li class="<?php
                if ($view == 'support') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('support') ?>"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a></li>
                <li class="<?php
                if ($view == 'quick_lsdsdinks') {
                    echo 'active';
                }
                ?>"><a class="raised ripple" href="<?php echo Yii::app()->createUrl('feedback') ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Feedback</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation for mobile Devices -->
</nav>   
