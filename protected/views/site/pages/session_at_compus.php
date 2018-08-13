<section class="banner_area session_at_campus">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section> 
<?php $this->setPageTitle('Session At Campus'); ?>
<?php $data  = ContentJson::model()->findByAttributes(array("page"=>"session_at_compus"));
    echo $data->data;
?>

<section class="pie_chart">
    <div class="container">
        <h2>Analysis of Our MBA Learners</h2>
        <div class="pie_module">
            <ul class="list-inline list-unstyled">
                <li>

                    <div id="chartContainer"></div>
                    <span class="chart_Text">Function</span>

                </li>
                <li class="border_active">

                    <div id="work_experiance"></div>
                    <span class="chart_Text">Work Experiance</span>

                </li>
                <li>

                    <div id="industry_choice"></div>
                    <span class="chart_Text">Industry Choice</span>

                </li>
                <li class="border_active">

                    <div id="Academic_div"></div>
                    <span class="chart_Text">Academic Background</span>

                </li>
                <li>

                    <div id="city_location"></div>
                    <span class="chart_Text">City / Location</span>

                </li>
            </ul>
        </div>
    </div>
</section>
<section class="contact_point">
    <div class="container">
        <div class="contact_now">
            <h2>One Point Contact:</h2>
            <span class="contact_img"></span>
            <a href="javascript:void(0);">support.xyz@mbatrek.com</a>
        </div>
    </div>
</section>