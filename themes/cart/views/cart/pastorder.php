<?php $this->setPageTitle('Past Orders');
$baseUrl = Yii::app()->request->baseUrl;
$orders = CustomerOrder::model()->findAllByAttributes(array("user_id"=>Yii::app()->user->id,"status" => 2));
$baseUrl = Yii::app()->request->baseUrl;;
?>
<div class="page-wrapper">
    <div class="cart_area_wrapper past_orders">
        <div class="container">
            <div class="">
                <div class="cart_wrapper">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart_detail">
                                <h3 class="past-order_Text">Past Orders </h3>
                                <?php foreach ($orders as $order){
                                    foreach($order->carts as $item){
                                        $url = str_replace("#","",rtrim($item->product->title));

                                        $url = str_replace(" ","-",$url);
                                        $url = strtolower($url);
                                ?>
                                <div class="cart_repeat">

                                    <ul>
                                        <li class="cart_icon">
                                            <a href="<?php echo Yii::app()->createUrl($url);?>">
                                                <img height="44" width="41" src="<?php echo $baseUrl;?>/assets/products/<?php echo $item->product->home_page_icon;?>">
                                            </a>
                                            <span>
                                                                <a href="<?php echo Yii::app()->createUrl($url);?>">
                                                                    <?php echo $item->product->title;?>                                            </a>
                                                            </span>
                                        </li>
                                        <li class="cart_label">
                                            <a href="<?php echo Yii::app()->createUrl($url);?>">
                                                <h4> <?php echo $item->product->title;?>    </h4>
                                            </a>
                                            <label>Understand how to make best use of the internship</label>
                                            <div class="puchase_id">
                                                <label class="id_pur"><span>Purchase ID:</span> <?php echo $order->ordfer_hash;?></label>
                                                <label class="id_pur pull-right"><span>Amount Paid:</span> ₹<?php echo money($order->order_amount);?></label>
                                                <div class="clearfix"></div>
                                                <label class="id_pur"><span>Purchased On:</span> <?php echo date("D, M, dS ‘y",strtotime($order->date_created));?></label>
                                            </div>
                                        </li>
                                        <li class="cart_money">
                                            <div class="help_div">
                                                <a href="javascript:void(0);">Need Help</a>
                                            </div>
                                            <div class="review_div">
                                                <a href="javascript:void(0);">Write a Review
                                                </a>
                                            </div>
                                        </li></ul>


                                </div>
                                <?php }}?>

                                <!--<a class="View_cart" href="">View Cart</a>-->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>