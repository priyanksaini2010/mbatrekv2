<div class="comment_reply">
    <h3 class="main_comment">Comments (<?php echo count($comments); ?>)</h3>
<!--    <div class="login_to_comment">
        <div class="site_btn"><a data-toggle="modal" data-target="#myModal1" class="raised ripple has-ripple" href="#myModal1">Login to Comment</a></div>
        <span class="login_comment">Don't have an account? <a href="<?php echo Yii::app()->createUrl("site/index"); ?>">Sign up</a> now</span>
    </div> -->
    <div class="comment_blocker">
        <?php foreach ($comments as $comment):?>
        <div class="comment_repeat">
            <div class="image_commet"><img src="<?php echo Yii::app()->baseUrl;?>/images/degault_user.png"></div>
            <div class="comment_data">
                <div class="comment_status">
                    <h3><?php echo ucfirst($comment->name);?></h3>
                    <span class="comment_date"><?php echo date("d M, h:i a",strtotime($comment->date_created));?></span>
                </div>
                <div class="comment_text">
                    <p><?php echo $comment->comment;?></p>
                    <div class="clearfix"></div>
                    <a class="reply_link" href="javascript:void(0);"><i class="fa fa-share" aria-hidden="true"></i> Reply</a>
<!--                    <div class="reply_div">
                        <div class="comment_repeat">
                            <div class="image_commet"><img src="images/degault_user.png"></div>
                            <div class="comment_data">
                                <div class="comment_status">
                                    <h3>Alok</h3>
                                    <span class="comment_date">30 Oct, 7:15 PM</span>
                                </div>
                                <div class="comment_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, neque gravida finibus varius, neque velit suscipit ex, et tempor justo odio in dui. Duis nec turpis sit amet nisi posuere dapibus ut ac enim. Duis  </p>
                                    <div class="clearfix"></div>
                                    <a class="reply_link" href="javascript:void(0);"><i class="fa fa-share" aria-hidden="true"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <?php endforeach;?>
        
    </div>
</div>