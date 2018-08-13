
<div class="leave_comment">
    <h2>Leave A Comment</h2>
    <div class="leave_comment_form">
        <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                        'id'=>'blog-comment',
                        'enableAjaxValidation'=>false,
                        'htmlOptions'=>array(
                            'class'=>'form-horizontal',
                    ))); ?>
            <div class="phAnimate">
                <div class="phAnimate">
                    <label for="firstname">Your Message <em>*</em></label>
                    <textarea id="comment" name="comment"></textarea>
                </div>
            </div>
            <div class="phAnimate">
                <label for="lastname">Your Name <em>*</em></label>
                <input type="text" class="input_field" id="name" name="name">
            </div>
            <div class="phAnimate">
                <label for="lastname">Your Email <em>*</em></label>
                <input type="text" class="input_field" id="email" name="email">
            </div>
            <div class="blog_btn">
                <div class="site_btn">
                    <a class="raised ripple has-ripple" href="javascript:void(0);" onclick="$('#blog-comment').submit()">Submit Comment</a>
                </div>
            </div>
           <?php $this->endWidget();?>
    </div>
</div> 