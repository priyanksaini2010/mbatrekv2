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
                $route = 'institutes/portal';
                break;
            case 3:
                $route = 'industry/portal';
                break;
            default :
                $route = "";
                break;
        }
    } else {
        $route = "";
    }
    ?>
<nav class="main_navigation">
    <div class="col-md-3 col-sm-5 col-xs-6">
        <div  class="logo_div"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/images/logo.png"></a></div>   
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
                ?>" > <a class="raised ripple active" href="<?php echo Yii::app()->createUrl('who-we-are') ?>">Who We Are</a>
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
                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('what-we-do') ?>">What We Do</a></li>
                <li class="<?php
                if ($view == 'our_bielf') {
                    echo 'active';
                }
                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('what-we-believe') ?>">Our Belief</a> </li>
                <li class="<?php
                if ($view == 'career') {
                    echo 'active';
                }
                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('career') ?>">Careers</a> </li>
                <li class="<?php
                if ($action == 'blogs' || $action == 'blogdetails') {
                    echo 'active';
                }
                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('blogs') ?>">Blog</a> </li>
                <li class="<?php
                if ($view == 'support') {
                    echo 'active';
                }
                ?>"> <a  class="raised ripple"href="<?php echo Yii::app()->createUrl('support') ?>">Support</a> </li>
                <li class="<?php
                if ($view == 'feedback') {
                    echo 'active';
                }
                ?>"> <a class="raised ripple" href="<?php echo Yii::app()->createUrl('feedback') ?>">Feedback</a> </li>

            </ul>
        </div>
    </div> 
</nav> 