<?php $this->setPageTitle('Pricing');
if (isset($_REQUEST['id'])) {
    switch ($_REQUEST['id']){
        case 1:
            $link = Yii::app()->createUrl('site/registerstudent');
            break;
        case 2:
            $link = Yii::app()->createUrl('site/registerstudentms');
            break;
        case 3:
            $link = Yii::app()->createUrl('site/registerstudentgrand');
            break;

    }
} else {
    $link = Yii::app()->createUrl('site/registerstudent');
}
 

?>

    <section class="banner_area who_we_are">
        <div class="container">
            <h2>You are always a student, never a master. You have to keep moving forward</h2>
            <span>- Conrad Hall</span>
        </div>
    </section> 
    <section class="bielf_container">
        <div class="container">
            <div class="main_heading pricing_heading">
                <h4>Pricing</h4>  
            </div>
            <div class="pricing_table">
                <table class="col-md-12 table-bordered">
                    <thead>
                        <tr>
                            <th class="blank_th"></th>
                            <th class="free_th">
                    <div class="th_block">
                        <h3>Free</h3>
                        <label><i class="fa fa-inr" aria-hidden="true"></i>0</label>
                        <h4>Per user/month</h4>
                    </div>
                    </th>
                    <th class="walk_th">
                    <div class="th_block">
                        <h3>Walk</h3>
                        <label><i class="fa fa-inr" aria-hidden="true"></i>500</label>
                        <h4>Per user/month</h4>
                    </div>
                    </th>
                    <th class="jog_th">
                    <div class="th_block">
                        <h3>jog</h3>
                        <label><i class="fa fa-inr" aria-hidden="true"></i>1000</label>
                        <h4>Per user/month</h4>
                    </div>
                    </th>
                    <th class="run_th">
                    <div class="th_block">
                        <h3>run</h3>
                        <label><i class="fa fa-inr" aria-hidden="true"></i>1500</label>
                        <h4>Per user/month</h4>
                    </div>
                    </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        LeapFWD <span>(Personal potential and skill enhancement)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>2 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>5 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>10 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>17 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        SkillUP  <span>(Professional skill development)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>6 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>11 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="m_line_hght">
                                        InCube   <span>(Corporate and business awareness)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>2 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>6 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>12 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>20 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        LedXemplary    <span>(Leadership potential development)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>5 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>9 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        Cracknack      <span>(Maturate critical thinking and analytical mindset)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>5 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        CHASE     <span>(Nurture Character, Hope, Attitude, Skill and Enthusiasm)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>5 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        TechEDGE     <span>(Application of technology to business)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>5 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="m_line_hght">
                                        RollOut     <span>(creation & exposure to live projects)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>2 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>4 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2>
                                        GoConsult     <span>(Knowledge & application of management tools)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        InternACE     <span> (Pre - internship support)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        InternPRO     <span>(During internship support)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>4 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>7 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        InternARISE     <span>(Post internship support)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>3 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        AGame     <span>(Placement support)</span>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>1 Sessions</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        Recommended Readings
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        Newsletter
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td>
                                <div class="td_block">
                                    <h2 class="single_height">
                                        Mentoring & Support
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p><i class="fa fa-minus" aria-hidden="true"></i></p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <img src="<?php echo Yii::app()->baseUrl;?>/images/right_td.png"/>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td><div class="td_block"></div></td>
                            <td>
                                <div class="td_block">
                                    <p>6</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>22</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>48</p>
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <p>87</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="recomd_hight">
                            <td><div class="td_block"></div></td>
                            <td>
                                <div class="td_block">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo $link;?>">Register</a>
                                    </div> 
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo $link;?>">Register</a>
                                    </div> 
                                </div>
                            </td>
                            <td>
                                <div class="td_block">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo $link;?>">Register</a>
                                    </div> 
                                </div>

                            </td>
                            <td>
                                <div class="td_block">
                                    <div class="site_btn">
                                        <a class="raised ripple has-ripple" href="<?php echo $link;?>">Register</a>
                                    </div> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
