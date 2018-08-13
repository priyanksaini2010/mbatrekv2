<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body class="adminsection">

<?php
$items = array(
            array('label'=>'Product Managment', 'url'=>array('/products/admin')),
            array('label'=>'Manufacturer Managment', 'url'=>array('/manufacturer/admin')),
            array('label'=>'Upload Products', 'url'=>array('/products/upload')),
            array('label'=>'Upload Manufacturer', 'url'=>array('/manufacturer/upload')),
        );

 $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>'#'),
                array('label'=>'User Managment', 'url'=>array('/users/admin')),
                array('label'=>'Content Managment', 'url'=>array('/content/admin')),
                array('label'=>'Product and Manufacturers','items'=>$items),
                
                
                array('label'=>'Enquiries', 'url'=>array('/enquiries/admin')),
                
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
        
    ),
    'collapse'=>true,
    
    'brand' => ''
     
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
                        'homeLink'=>CHtml::link('Home', array('/users/admin')),

		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>



</div><!-- page -->

</body>
</html>