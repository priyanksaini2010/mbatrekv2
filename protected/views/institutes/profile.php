<?php // pr($data['institute']->institute->instituteBatches, false);
    $industryProfile = InstituteUser::model()->findByAttributes(array("user_id" => Yii::app()->user->id));
?>
<section class="institute_prfoile">
    <div class="container">
	<div class="row">
	    <div class="col-md-2 col-sm-2 col-xs-4">
		<div class="profile_picinst">
		    <?php if($data['institute']->profile_pic == "") {?>
		    <img src="<?php echo Yii::app()->baseUrl;?>/images/defualt_user.jpg">
		    <?php } else {?>
		    <img src="<?php echo Yii::app()->baseUrl;?>/assets/companylogo/<?php echo $data['institute']->profile_pic;?>">
		    <?php }?>
		</div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12 name_owner">
		<div class="institute_descri">
		    <div class="prfole_name">
			<label><?php echo $data['userData']->fname." ".$data['userData']->lname ;?><a href="<?php echo Yii::app()->createUrl("institutes/editprofile");?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></label>
			<span><?php echo $data['institute']->designation;?></span>
		    </div>
		    <div class="prfole_name">
			<label>Your Contact</label>
			<span><?php echo $data['userData']->email;?></span>
		    </div>
		</div>
	    </div>
	    <div class="col-md-7 col-sm-7 col-xs-12 institute_info">
		<div class="profile_cont_inst">
		    <table class="table-bordered">
			<tbody>
			    <tr>
				<td class="heading_text">Name Of Institute:</td>
				<td><?php echo $data['institute']->institute->name;?></td>
			    </tr>
			    <tr>
				<td class="heading_text">Address:</td>
				<td><?php echo $data['userData']->city;?></td>
			    </tr>
			    <tr>
				<td class="heading_text">Phone No:</td>
				<td><?php echo $data['userData']->phone_number;?></td>
			    </tr>
			    <tr>
				<td class="heading_text">Mobile No:</td>
				<td><?php echo $industryProfile->mobile;?></td>
			    </tr>
			    <tr>
				<td class="heading_text">Email Address:</td>
				<td><?php echo $data['userData']->email;?></td>
			    </tr>

			</tbody>
		    </table>
		</div>
	    </div>
	    <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="institute_education">
		    <div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 program_register">
			    <div class="education_Details">
				<label>1) Program Register</label>
				<div class="checkbox_div chec_filed">
                                    <input type="checkbox" <?php if($industryProfile->prog_1 == 1){?>checked="checked"<?php }?> class="css-checkbox" id="Mbatrek" name="Mbatrek">
				    <label class="css-label" for="Mbatrek">Mbatrek</label>
				</div>
				<div class="checkbox_div chec_filed">
                                    <input type="checkbox" <?php if($industryProfile->prog_2 == 1){?>checked="checked"<?php }?> class="css-checkbox" id="Mtrek" name="Mtrek">
				    <label class="css-label" for="Mtrek">Mtrek</label>
				</div>
				<div class="checkbox_div chec_filed">
                                    <input type="checkbox" <?php if($industryProfile->prog_3 == 1){?>checked="checked"<?php }?> class="css-checkbox" id="GrandXplore" name="GrandXplore">
				    <label class="css-label" for="GrandXplore">GrandXplore</label>
				</div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12 program_register">
			    <div class="education_Details">
				<label>2) Batches Register</label>
				<?php foreach ($data['institute']->institute->instituteBatches as $btach    ){?>
				<div class="checkbox_div chec_filed">
				    <input type="checkbox" checked="checked" class="css-checkbox" id="bataches<?php echo $btach->id;?>" name="<?php echo $btach->id;?>">
				    <label class="css-label" for="bataches<?php echo $btach->id;?>"><?php echo $btach->name;?></label>
				</div>
				<?php }?>
				
			    </div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12 program_register">
			    <div class="education_Details">
				<label>3) Live Projects</label>
				<div class="project_label">
				    <ul class="list-unstyled">
					<li><label><?php echo $industryProfile->live_1;?></label></li>
					<li><label><?php echo $industryProfile->live_2;?></label></li>
					<li><label><?php echo $industryProfile->live_3;?></label></li>
					
				    </ul>
				</div>
			    </div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12 program_register">
			    <div class="education_Details">
				<label>4) Internship</label>
				<div class="project_label">
				    <ul class="list-unstyled">
					<li><label><?php echo $industryProfile->int_1;?></label></li>
					<li><label><?php echo $industryProfile->int_2;?></label></li>
					<li><label><?php echo $industryProfile->int_3;?></label></li>
					
				    </ul>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>