<?php
$product = Products::model()->findByPk($id);
?>
<div class="comany_conainer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="company_left">
                    <h3><?php echo $product->title; ?>
                    </h3>
                    <?php echo $product->description; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="buy_now">
                    <a href="javascript:void(0)">Buy Now &#8377 <?php echo $product->price; ?></a>
                    <ul class="gd_ul">
                        <h2>Includes</h2>
                        <?php foreach ($product->productIncludes as $include) { ?>
                            <li>

                                <div class="li_wrap"><img src="assets/products/<?php echo $include->logo; ?>"/></div>
                                <div class="li_Text_wrap">
                                    <?php echo $include->description; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="how_We_contaner">
            <h3>How do we engage with you  </h3>
            <ul class="">
                <?php foreach ($product->productEngages as $eKey=>$engage){?>
                <?php if($eKey % 2 == 0 || $eKey == 0){?>
                <li>
                    <span class="four_line"><?php echo $engage->description;?></span>
                    <span class="step_up"><?php echo $engage->description2;?></span>
                    <div class="icon_wrapper">
                        <img src="assets/products/<?php echo $engage->icon;?>"/>
                    </div>

                </li>
                <?php } else {?>
                <li>
                    <div class="icon_wrapper four_line">
                       <img src="assets/products/<?php echo $engage->icon;?>"/>
                    </div>
                    <span class="step_up padding-top-7"><?php echo $engage->description2;?></span>
                    <span><?php echo $engage->description;?></span>
                </li>
                <?php }}?>
            </ul>
        </div>
        <div class="key_outcomes">
            <h3>Key Outcomes </h3>
            <ul>
                 <?php foreach ($product->productKeyOutcomes as $outcomes){?>
                <li>
                    <img src="assets/products/<?php echo $outcomes->icon;?>"/>
                    <span><?php echo $outcomes->description;?></span>
                </li>
                 <?php }?>
                
            </ul>
        </div>
        <div class="our_recomanded product_recomnd">
            <h4>Recommended Value Saver Packages </h4>
            <ul>
                <?php foreach($product->productRecommendedValueSaverPacks as $recon){?>
                <li>
                    <div class="recomended_title">
                        <label>
                           <?php echo $recon->title;?>
                            <span>
                                (Choose your best fit)
                            </span>
                        </label>
                        <img src="assets/products/<?php echo $recon->icon;?>"/>
                    </div>

                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
