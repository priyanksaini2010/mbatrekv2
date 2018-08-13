<section class="banner_area interactionwithfaculty">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  

<section class="industrial_portal intrection_faclty">
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal');?>">Institute</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('institutes/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="javascript:void(0);">Synergy & StepFWD</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Interaction With Faculty</a></li>
            </ul>
        </div> 
        <div class="row">
            <?php echo $this->renderPartial("left_menu",array('data'=>$data));?>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar ">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="date_details">
                                <table class="col-md-12 col-sm-12 col-xs-12 table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="heading_text">Date:</td>
                                            <td>23.10.2012</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Time:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Topic:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Stream:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Venue:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Duration:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="heading_text">Agenda:</td>
                                            <td>12:20 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="one_meeting">
                                <div class="meeting_heading">
                                    <h2>Minutes Of Meeting</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="label_meeting">
                                            <label>Attendance:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="input_meeting">
                                            <input type="text"/>
                                        </div>
                                    </div>
                                </div> 
                                <div class="name_metng">
                                    <label>Name of Faculty Attended: </label>
                                    <table class="col-md-12 col-sm-12 col-xs-12 table-bordered">
                                        <thead>
                                            <tr><th class="serial_number">S.No</th>
                                                <th>Name Of Faculty</th>
                                                <th>Stream</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="heading_text"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="heading_text"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="heading_text"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="heading_text"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="field_container">
                                        <div class="row">
                                            <div class="col-md-6 sm-6 xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Open Time:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <input type="text"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 sm-6 xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Close Time:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <input type="text"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 sm-12 xs-12 text_ara_mtng">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="label_meeting">
                                                            <label>Summary:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="input_meeting">
                                                            <textarea></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="agreed_plan">
                                        <div class="meeting_heading">
                                            <h2>Agreed Plan Of Action</h2>
                                        </div>
                                        <table class="col-md-12 table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="serial_number">S.No</th>
                                                    <th class="plan_action">Plan Of Action</th>
                                                    <th>Person Responsible</th>
                                                    <th>Due Date</th>
                                                    <th>Evidence For Competition</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="heading_text">1.</td>
                                                    <td>a)  Etiam imperdiet ante</td>
                                                    <td></td>
                                                    <td>dt _ / __ / ____</td>
                                                    <td class="icon_doc"><img src="<?php echo Yii::app()->baseUrl;?>/images/doc.png"/></td>
                                                </tr>
                                                <tr>
                                                    <td class="heading_text">1.</td>
                                                    <td>a)  Etiam imperdiet ante</td>
                                                    <td></td>
                                                    <td>dt _ / __ / ____</td>
                                                    <td class="icon_doc"><img src="<?php echo Yii::app()->baseUrl;?>/images/doc.png"/></td>
                                                </tr>
                                                <tr>
                                                    <td class="heading_text">1.</td>
                                                    <td>a)  Etiam imperdiet ante</td>
                                                    <td></td>
                                                    <td>dt _ / __ / ____</td>
                                                    <td class="icon_doc"><img src="<?php echo Yii::app()->baseUrl;?>/images/doc.png"/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="data_intraction">
                                        
                                        <select>
                                            <option>Past Interaction</option>
                                            <option>ABC</option>
                                            <option>ABC</option>
                                            <option>ABC</option>
                                            <option>ABC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>