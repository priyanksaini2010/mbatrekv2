<?php $this->setPageTitle($model->title); ?>
<div class="blog_new_container_details">
    <div class="blog_header">
    <!--    <div class="container">
            <div class="col-md-4">
                <div class="header_btn"><a class="active_high" href="javascript:void(0);">Recent Updates</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a href="javascript:void(0);">Recent Updates</a></div>
            </div>
            <div class="col-md-4">
                <div class="header_btn"><a href="javascript:void(0);">Recent Updates</a></div>
            </div>
        </div>
    </div>-->
    <div class="container">
        <div class="blog_container">
            <h3>Helping you make the most of your career</h3>
            <div class="blog_details">
                <div class="blog_heading">
                    <h2><?php echo $model->title; ?></h2>
                    <ul class="list-inline list-unstyled">
                        <li><span class="posted_by">By: <?php echo ucfirst($model->author);?></span></li>
                        <li><span class="posted_on">On:  <?php echo date("d M, Y",  strtotime($model->date_created));?></span></li>
						<li>
							
						<div class="share_post">
                            <ul class="list-inline list-unstyled">
                                <!--<li><a class="comment_post" href="javascript:void(0);">0Comments</a></li>-->
                                <li><i class="fa fa-share-alt" aria-hidden="true"></i><span class="share_label">Share</span> <a href="javascript:void(0);" class="share_post_b jssocials" id="share"> 
                                    <div class="jssocials-shares">&nbsp;</div>
                                    </a> </li>
                            </ul>
                       </div>
						</li>
                    </ul>
                </div>
                <div class="blog_header"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $model->banner_image;;?>" alt="" /></div>
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       
                        <div class="post_information">
                        <?php echo $model->content; ?>
                    </div> 
<!--                        <div class="leave_comment">
                            <h2>Leave A Comment</h2>
                            <div class="leave_comment_form"><form id="blog-comment" class="form-horizontal form-vertical" action="/site/blogdetails/12" method="post">
                                    <div class="phAnimate">
                                        <div class="phAnimate"><label for="firstname">Your Message <em>*</em></label> <textarea id="comment" name="comment"></textarea></div>
                                    </div>
                                    <div class="phAnimate"><label for="lastname">Your Name <em>*</em></label> <input id="name" class="input_field" type="text" name="name" /></div>
                                    <div class="phAnimate"><label for="lastname">Your Email <em>*</em></label> <input id="email" class="input_field" type="text" name="email" /></div>
                                    <div class="blog_btn">
                                        <div class="site_btn"><a class="raised ripple has-ripple" onclick="$('#blog-comment').submit()" href="javascript:void(0);">Submit Comment</a></div>
                                    </div>
                                </form></div>
                        </div>-->
                        <!--<div class="comment_reply">
                            <h3 class="main_comment">Comments (0)</h3>
                             <div class="login_to_comment">
                                                                                    <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" class="raised ripple has-ripple" href="#myModal1">Login to Comment</a></div>
                                                                                    <span class="login_comment">Don't have an account? <a href="/site/index">Sign up</a> now</span>
                                                                            </div> 
                            <div class="comment_blocker">&nbsp;</div>
                        </div>-->
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="categories_container">
                            <div class="block_catry">
                                <h2>Category</h2>
                                <ul class="list-unstyled">
                                    
                                    <?php 
                                $cats = BlogCategory::model()->findAll();
                                foreach($cats as $cat):?>
                                <li><a href="<?php echo Yii::app()->createUrl("site/blogs",array("cat_id"=>$cat->id));?>">-  <?php echo $cat->name?></a></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="block_catry">
                                <h2>Latest POSTS</h2>
                                <ul class="list-unstyled">
                                    <?php foreach($latest as $lat){?>
                                    <li><img src="<?php echo Yii::app()->baseUrl;?>/assets/blogs/<?php echo $lat->background_image;?>" alt="" /> <a href="<?php echo Yii::app()->createUrl("site/blogdetails", array("id"=>$lat->id));?>"><?php echo $lat->title;?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>