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
		<link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl;?>/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo Yii::app()->baseUrl;?>/images/favicon.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.DEPreLoad.js"></script>
        <script src="<?php echo Yii::app()->baseUrl;?>/js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/jquery.mCustomScrollbar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/js/jssocials-theme-flat.css" />
	<style>
	     .jssocials-share-link { border-radius: 50%; } 
	</style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>-->
        <!--<script src="js/example.js"></script>-->
        <!--<link rel="stylesheet" href="js/example.css">-->
        <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">-->
        <!--<link rel="stylesheet" href="js/morris.css">-->
        <!--[if lt IE 8]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-91486708-1', 'auto');
	  ga('send', 'pageview');

	</script>
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
    <body class="body_class_identifier">
<?php if ( $route == 'student/portal' && $controller == "student") { 
    $studentData  = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id)); ;
    $instituteId = $studentData->instituteBatch->institute->id;
    $attendance = InstituteBatchSessionStudentAttendance::model()->findAllByAttributes(array('student_id' => $studentData->id));
    $totalAtt = 0;
    $totalAttended = 0;
    foreach ($attendance as $t) {
	$totalAtt = $totalAtt + 1;
	if ($t->is_present) {
	    $totalAttended  = $totalAttended + 1;
	}
    }
    if ($totalAtt != 0) {
	$at =  number_format(($totalAttended/$totalAtt) * 100, 2)."%";
    } else {
	$at =  "0%";
    }
    
    $userData  = Users::model()->findByPk( Yii::app()->user->id);
    $json = isset($studentData->profile_json) && !empty($studentData->profile_json)?json_decode($studentData->profile_json):"";
?>
            <div class="student_info_fx">
                <a class="student_profile" href="javascript:void(0);">Student Profile</a>
                <div class="profile_coantainer">
                    <div class="profile_student">
                        <a href="<?php echo Yii::app()->createUrl("student/editprofile",array("display"=>"pp"));?>" title="Click here to change profile picture.">
	    <img src="<?php echo isset($json->profile_pic) && $json->profile_pic != ""?Yii::app()->baseUrl."/assets/resumes/".$json->profile_pic:Yii::app()->baseUrl."/images/defualt_user.jpg"?>"/>
			</a>
			
                        <ul class="list-unstyled list-inline">
                            <li><a target="__blank" href="<?php echo isset($json->profile_fb) && $json->profile_fb!=""?$json->profile_fb:"https://www.twitter.com/"?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="__blank" href="<?php echo isset($json->profile_linked) && $json->profile_linked != ""?$json->profile_linked:"https://www.linkedin.com/"?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="profile_content">
                        <h3><a href="<?php echo Yii::app()->createUrl("student/editprofile");?>"><?php echo Yii::app()->user->name;?><a/></h3>
                        <p>ID: <?php echo $userData->id;?></p>
                        <p>Last Logged in: <?php echo date("d.m.Y",  strtotime($userData->last_login));?></p>
                        <p>Attendance: <?php echo $at;?></p>
                    </div>
                    <div class="resume_studetn">
                        <div class="site_btn"><a class="raised ripple has-ripple" href="<?php echo Yii::app()->createUrl("student/resume");?>">Resume </a></div>
                    </div>
                    <h3 class="fcus_hding">Focus Area</h3>
                    <div id="" class="content mCustomScrollbar">
                        <div class="focus_area">
                            
                            <h2><a href="<?php echo Yii::app()->createUrl("student/industry",array("display"=>"ind"));?>">1)
				    <span style="text-decoration: underline;">Industry</span></a></h2>
                            <ul class="list-unstyled">
                               
			<?php if(isset($studentData->industry1->option_name) && $studentData->industry1->option_name != ""){?>
				 <li>
			    <?php echo isset($studentData->industry1->option_name)?$studentData->industry1->option_name:"";?>
				</li>
			<?php }?>
			<?php if(isset($studentData->industry2->option_name) && $studentData->industry2->option_name != ""){?>
				 <li>
			    <?php echo isset($studentData->industry2->option_name)?$studentData->industry2->option_name:"";?>
				</li>
			<?php }?>
			<?php if(isset($studentData->industry3->option_name) && $studentData->industry3->option_name != ""){?>
				 <li>
			    <?php echo isset($studentData->industry3->option_name)?$studentData->industry3->option_name:"";?>
				</li>
			<?php }?>
			<?php if(isset($studentData->industry4->option_name) && $studentData->industry4->option_name != ""){?>
				 <li>
			    <?php echo isset($studentData->industry4->option_name)?$studentData->industry4->option_name:"";?>
				</li>
			<?php }?>
			<?php if(isset($studentData->industry5->option_name) && $studentData->industry5->option_name != ""){?>
				 <li>
			    <?php echo isset($studentData->industry5->option_name)?$studentData->industry5->option_name:"";?>
				</li>
			<?php }?>
                                
                                
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>
				<a href="<?php echo Yii::app()->createUrl("student/editprofile",array("display"=>"comp"));?>">2)
				    <span style="text-decoration: underline;">Companies</span></a></h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_companies) && !empty($json->profile_companies)){?>
                                <?php foreach ($json->profile_companies as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>
			<?php if ($instituteId == 0){$link = "javascript:void('0')";}else{$link = Yii::app()->createUrl("student/liveandintern",array("type"=>"int"));}?>
			<?php if ($instituteId == 0){$onclick = " $('#myModalIntSorry').modal('show');";}else{$onclick = "javascript:void('0')";}?>
				<a href="<?php echo $link;?>" onclick="<?php echo $onclick?>">3)
				    <span style="text-decoration: underline;">Internship</span></a></h2>
                            <ul class="list-unstyled">
                                <?php if(isset($json->profile_intership) && !empty($json->profile_intership)){?>
                                <?php foreach ($json->profile_intership as $ind){?>
                                    <li><?php echo $ind;?></li>
                                <?php }}?>
                            </ul>
                        </div>
                        <div class="focus_area">
                            <h2>
			<?php if ($instituteId == 0){$link = "javascript:void('0')";}else{$link = Yii::app()->createUrl("student/liveandintern",array("type"=>"live"));}?>
			<?php if ($instituteId == 0){$onclick = "$('#myModalLiveSorry').modal('show');";}else{$onclick = "javascript:void('0')";}?>
				<a href="<?php echo $link;?>" onclick="<?php echo $onclick?>">4)
				    <span style="text-decoration: underline;">Live Project</span></a></h2>
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
        <div id="depreload" style="background-image:url('<?php echo Yii::app()->baseUrl;?>/images/bgr.jpg');" class="table">
            <div class="table-cell wrapper">
                <div class="circle">
                    <canvas class="line" width="178px" height="189px"></canvas>
                    <img src="<?php echo Yii::app()->baseUrl;?>/images/preloader.png" class="logo" alt="logo" />
                </div>
                <p class="perc"></p>
                <p class="loading">MBAtrek Loading...</p>
            </div> 
        </div> 
        <div class="full_wrapper ">
            <?php echo $this->renderPartial("/layouts/sticky");?>

            <header>
                <?php echo $this->renderPartial("/layouts/mobilemenu");?>
                <?php echo $this->renderPartial("/layouts/mainmenu");?>
            </header>
            <article>
<?php echo $content; ?>
            </article>
            <footer class="footer_container">
                <?php echo $this->renderPartial("/layouts/footer");?>
                <?php echo $this->renderPartial("/layouts/popups");?>
                <?php echo $this->renderPartial("/layouts/popupsindustry");?>
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
        <script src="<?php echo Yii::app()->baseUrl;?>/js/bootstrap.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/custom.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.materialripple.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/classie.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.goup.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.slideandswipe.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.mCustomScrollbar.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/canvasjs.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.touchSwipe.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.viewbox.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/velocity.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/velocity.ui.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.date-dropdowns.js"></script>
	<script src="<?php echo Yii::app()->baseUrl;?>/js/bootstrap-filestyle.js"></script>
        <script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl;?>/js/jssocials.min.js"></script>
        <?php echo $this->renderPartial("/layouts/graphscript");?>
        
        <?php echo $this->renderPartial("/layouts/scripts");?>
        <?php echo $this->renderPartial("/layouts/scriptsindustry");?>
    </body>
</html>
    
