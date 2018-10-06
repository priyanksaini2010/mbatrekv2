
<?php $this->setPageTitle('Frequently Asked Questions'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Frequently Asked Questions</a></li>
    </ul>
</div>
<?php
$data = ContentJson::model()->findByAttributes(array("page" => "faq"));
$FaqType = FaqType::model()->findAll();;
//echo $data->data;
?>
<div class="faq_new_container">
    <div class="container">
        <h3>We at MBAtrek are here to help with all your career development needs Feel Free to Explore.</h3>
        <h4>Expand the following drop-downs for answers to frequently asked questions.</h4>
        <div class="faq_Container">
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <?php
                        $counter = 1;
                        foreach ($FaqType as $faq){?>
                        <!--<li ><a class="active" href="#tab_default_1" data-toggle="tab"> Student </a></li>-->
                        <li><a <?php if($counter == 1){?>class="active"<?php }?> href="#tab_default_<?php echo $faq->id;?>" data-toggle="tab"> <?php echo ucfirst($faq->name);?> </a></li>
                        <!--<li><a href="#tab_default_3" data-toggle="tab"> Industry </a></li>-->
                        <?php $counter++;}?>
                    </ul>
                    <?php foreach ($FaqType as $faq){?>
                    <div class="tab-content">
                        <div id="tab_default_<?php echo $faq->id;?>" class="tab-pane active">
                            <ul id="" class="accordion">
                                <?php 
                                    $dataArray  = Faq::model()->findAllByAttributes(array("type" => $faq->id));
                                    foreach ($dataArray as $data){
                                ?>
                                <li>
                                    <div class="link"><?php echo $data->question;?></div>
                                    <div class="submenu">
                                        <p><?php echo $data->answer;?></p>
                                    </div>
                                </li>
                                    <?php }?>
                            </ul>
                        </div>
                        
                    </div>
                      <?php }?>
                </div>
            </div>
            <div class="fq_footer"><label>Still stuck with your problem? <span>Contact us at</span> <span class="color_span"> contact@mbatrek.com</span> or Talk to Our <span>Career Advisor at</span> <span class="color_span">+91 98219 48334</span> </label></div>
        </div>
    </div>
</div>
