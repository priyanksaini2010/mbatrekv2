<?php $this->setPageTitle('Payment Failed');
$baseUrl = Yii::app()->request->baseUrl;
?>

<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Payment Failed</a></li>
    </ul>
</div>
<div class="login_container">
    <div class="container">
        <div class="row">
            <div class="login_wrapper">
                <h3 class="heading-desc">Oops! Payment Failed</h3>


                <div class="main">
                    Your Payment failed because of following reason:
                    <br />
                    <p>
                        <?php echo $reason;?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
