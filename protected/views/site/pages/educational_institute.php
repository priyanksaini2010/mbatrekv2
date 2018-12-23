
<?php $this->setPageTitle('Educational Institutes'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->createUrl(''); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Educational Institutes</a></li>
    </ul>
</div>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"educational_institute"));
    echo $data->data;
?>
