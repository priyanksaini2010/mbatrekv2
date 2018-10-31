
<?php $this->setPageTitle('Our Team'); ?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
	<li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li><a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
	<li class="active"><a href="javascript:void(0);">Our Team</a></li>
    </ul>
</div>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"team"));
    echo $data->data;
?>
  <script>
    $(".show_content_alok").hover(
        function () {
        $(".alok_info").addClass("display_information_alok");
        },
        function () {
        $(".alok_info").removeClass("display_information_alok");
        }
    );
    $(".show_content_abhishek").hover(
        function () {
        $(".abhishek_info").addClass("display_information_alok");
        },
        function () {
        $(".abhishek_info").removeClass("display_information_alok");
        }
    );
    $(".ayushi_info").hover(
        function () {
        $(".show_ayushi_info").addClass("display_information_alok");
        },
        function () {
        $(".show_ayushi_info").removeClass("display_information_alok");
        }
    );
    $(".rahul_info").hover(
        function () {
        $(".show_rahul_info").addClass("display_information_alok");
        },
        function () {
        $(".show_rahul_info").removeClass("display_information_alok");
        }
    );
    </script>