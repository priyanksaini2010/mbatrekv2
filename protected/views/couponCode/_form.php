<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'coupon-code-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <label for="CouponCode_discount_type" class="required">Discount Type<span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'discount_type',array(1=>"Percentage",2=>"Flat"),array('class'=>'span5')); ?>
    <br/>
    <label for="CouponCode_coupon_type" class="required">Coupon Type<span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'coupon_type',array(1=>"Domain Based",2=>"Code Based"),array('class'=>'span5')); ?>
        
	<?php echo $form->textFieldRow($model,'domain',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5','maxlength'=>255)); 
	 echo $form->textFieldRow($model,'min_value',array('class'=>'span5','maxlength'=>255)); 
        ?>
        <br />
    <?php echo $form->dropDownList($model,'is_active',array(1=>"Activate",2=>"Deactivate"),array('class'=>'span5')); ?>
    <br/>
    <label for="CouponCode_expiry_required" class="required">Is this coupon have an expiry date?<span class="required">*</span></label>
    <?php echo $form->dropDownList($model,'expiry_required',array(0=>"No",1=>"Yes"),array('class'=>'span5')); ?>
    <br/>
    <?php echo $form->textFieldRow($model,'expiry_date',array('class'=>'span5','maxlength'=>255));?>
    <br/>
    <label for="Select-Products">Select Applicable Products</label>
<?php $products = Products::model()->findAll();
    $selected = array();
    if(!$model->isNewRecord) {
        foreach($model->couponProductMaps as $map){
            $selected[] = $map->product_id;
        }
    }
?>
    <select id="Select-Products" class="span-5" multiple="multiple" style="width: 470px" name="selectedProducts[]">
        <option <?php echo $model->isNewRecord ? 'selected="selected"' : '';?> value="0">All Products</option>
        <?php foreach ($products as $product){?>
        <option <?php echo in_array($product->id,$selected)?"selected=''selected":'';?> value="<?php echo $product->id;?>"><?php echo $product->title;?></option>
        <?php }?>
    </select>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript">
    $(function () {
        $('#CouponCode_expiry_date').datepicker({
            dateFormat : "yy-mm-dd"
        });
        
        $("#coupon-code-form").submit(function () {
            var selectedProducts = $("#Select-Products").val();
            var ret = true;
            $.each(selectedProducts, function (key, value) {
                if (value == 0 && selectedProducts.length > 1) {
                    alert("All products option have to selected individually.")
                    ret = false;
                }
            })
            if ($("#CouponCode_expiry_required").val() == 1 && $("#CouponCode_expiry_date").val() == '') {
                alert("Please select an expiry date.")
                ret = false;
            }
            return ret;
        })
    });
</script>
<?php $this->endWidget(); ?>
