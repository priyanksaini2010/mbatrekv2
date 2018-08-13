<div class="student_info_fx">
    <a class="student_profile" href="javascript:void(0);">Student Profile</a>
    <div class="profile_coantainer">
        <div class="profile_student">
            <img src="images/defualt_user.jpg"/>
            <ul class="list-unstyled list-inline">
                <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="profile_content">
            <h3><?php echo $data['userData']->fname." ".$data['userData']->lname; ?></h3>
            <p>ID: <?php echo $data['userData']->id;?></p>
            <p>Last Logged in: <?php echo date("d.m.Y", strtotime($data['userData']->last_login));?></p>
            <p>Attendance: 80%</p>
        </div>
        <div class="resume_studetn">
            <div class="site_btn"><a class="raised ripple has-ripple" href="javascript: void('0')">Resume </a></div>
        </div>
        <h3 class="fcus_hding">Focus Area</h3>
        <div id="content1-1" class="content">
            <div class="focus_area">

                <h2>1) Industry</h2>
                <ul class="list-unstyled">
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="focus_area">
                <h2>2) Companies</h2>
                <ul class="list-unstyled">
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="focus_area">
                <h2>3) Internship</h2>
                <ul class="list-unstyled">
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="focus_area">
                <h2>4) Live Project</h2>
                <ul class="list-unstyled">
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
            <div class="focus_area">
                <h2>3 Live Project</h2>
            </div>
            <div class="focus_area">
                <h2>5 Industrial Exhibitions</h2>
            </div>
        </div>
    </div>
</div>