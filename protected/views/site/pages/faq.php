
<?php $this->setPageTitle('FAQs'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
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
        <h3>We at MBAtrek are here to help you with all your career development needs</h3>
        <h4>Click on the following question for detailed answers.</h4>
        <div class="faq_Container">
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <?php
                        $counter = 1;
                        foreach ($FaqType as $faq){?>
                        <!--<li ><a class="active" href="#tab_default_1" data-toggle="tab"> Student </a></li>-->
                        <li <?php if($counter == 1){?>class="active"<?php }?>><a  href="#tab_default_<?php echo $faq->id;?>" data-toggle="tab"> <?php echo ucfirst($faq->name);?> </a></li>
                        <!--<li><a href="#tab_default_3" data-toggle="tab"> Industry </a></li>-->
                        <?php $counter++;}?>
                    </ul>
                     <div class="tab-content">
                    <?php  $counter = 1;foreach ($FaqType as $faq){?>
                   
                        <div id="tab_default_<?php echo $faq->id;?>" class="tab-pane <?php if($counter == 1){?>active<?php }?>">
                            <ul id="" class="accordion">
                                <?php 
                                
                                $criteria = new CDbCriteria;
                                $criteria->addCondition("type = ".$faq->id);
                                $criteria->order = "sortOrder asc";
                                $dataArray  = Faq::model()->findAll($criteria);
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
                        
                   
                      <?php $counter++;}?>
                          </div>
                </div>
            </div>
            
            
            <div class="fq_footer"><label>Still stuck with your problem? <span><a href="<?php echo Yii::app()->createUrl("contact-us");?>">Contact us</a> at</span> <a href="mailto:contact@mbatrek.com"><span class="color_span"> contact@mbatrek.com</span></a> or <a href="<?php echo Yii::app()->createUrl("talk-to-our-career-advisor");?>">Talk to Our <span>Career Advisor</a> at</span> <a href="https://wa.me/919821948334?text=Can%20you%20help%20with%20MBAtrek%27s%20career%20development%20services%3F%F0%9F%98%81" class="color_span">+91 98219 48334</a> </label></div>
        </div>
    </div>
</div>
