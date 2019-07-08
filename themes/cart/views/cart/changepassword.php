<div class="page-wrapper">
    <div class="profile_container">
        <h3>Change Passsword</h3>
        <div class="container">
            <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                'id'=>'cp-form',
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array(
                    'class'=>'form-signin mg-btm',
//                            'action' => Yii::app()->createUrl('site/register')

                ))); ?>
            <div class="profile_user">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label class="profile_user">Old Password:</label>
                    </div>
                    <div class="col-md-8">
                        <input  type="password" id="old-password" name="UsersNew[old-password]" placeholder="********"/>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label class="profile_user">Password:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" placeholder="********" id="new-password" name="UsersNew[password]"/>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label class="profile_user">Confirm Password:</label>
                    </div>
                    <div class="col-md-8">
                        <input  type="password" placeholder="********" id="confirm-password" name="UsersNew[confim-password]"/>

                    </div>
                </div>

                <div class="col-md-12">
                    <a class="profile_btn" href="javascript:void(0);" id="change-password-save">Save</a>
                    <a  class="profile_btn"  href="<?php echo Yii::app()->createUrl("update-profile"); ?>">Cancel</a>
                </div>
            </div>
            <?php $this->endWidget();?>
        </div>
    </div>
</div>