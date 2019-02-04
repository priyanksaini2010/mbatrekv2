<div class="page-wrapper">
    <div class="profile_container">
        <h3>My Profile</h3>
        <div class="container">
            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                'id'=>'profile-form',
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array(
                    'class'=>'form-signin mg-btm',
//                            'action' => Yii::app()->createUrl('site/register')

                ))); ?>
            <div class="profile_user">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="profile_user">Name:</label>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input readonly="readonly" type="text" name="full_name" id="profile-name" placeholder="<?php echo $model->full_name;?>"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="profile_user">E-mail:</label>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input readonly="readonly" type="text" name="email" id="profile-email" placeholder="<?php echo $model->email;?>"/>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="profile_user">Mobile Number:</label>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" autofocus="autofocus" name="UsersNew[mobile_number]" id="profile-mobile-number" value="<?php echo $model->mobile_number;?>" placeholder="<?php echo $model->mobile_number;?>"/>
                        <a href="javascript:void('0')"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <label class="profile_user">Password:</label>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input readonly="readonly" type="text" placeholder="********"/>
                        <a href="<?php echo Yii::app()->createUrl("change-password");?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <a class="profile_btn" href="javascript:void(0);" id="profile-save">Save</a>
                    <a  class="profile_btn"  href="<?php echo Yii::app()->getHomeUrl(); ?>">Cancel</a>
                </div>
            </div>
            <?php $this->endWidget();?>
        </div>
    </div>
</div>