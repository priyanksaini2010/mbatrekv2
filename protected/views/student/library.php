<section class="banner_area our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>  
<section class="industrial_portal student_webinar">	
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createUrl('student/portal');?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Library</a></li>
            </ul>
        </div>   
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
                <?php echo $this->renderPartial("left_menu",array("data"=>$data));?>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="right_sidebar">
                    <div class="libray_content">
                        <p class="librery_p">MBAtrek believe that books play an important role to move you one step closer to
be “Industry Ready and Relevant” professionals.</p> 
<p class="librery_p">
In keeping with your skills, areas of improvement, preferred industry, companies,
and domain we recommend you an inventory of books from which you can hand-
pick your “Favorite Books” for further reading, but we advise you to read them all.
</p>
<p class="librery_p">
After completing a book attach a brief of your learnings in “My Learnings” section,
these learning will forever stay in your mind and lead you to a better career
ahead.
</p>
                        <div class="library_info">
                            <div class="librady_block">
                                <div class="libray_heading">
                                    <h2>My Favourite Books</h2>
                                </div>
                                <div class="librady_wrper">
                                    <ul class="list-unstyled">
                                        <?php foreach ($data['studentFavs'] as $favbook) {?>
                                            <li><label><?php echo $favbook->book->name;?> <a href="<?php echo Yii::app()->createUrl("student/removeFav", array("id"=>$favbook->id));?>"><i class="fa fa-trash" aria-hidden="true"></i></a> </label></li>
                                        <?php }?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="librady_block second_ul">
                                <div class="libray_heading">
                                    <h2>“Great Books” - recommended  by MBAtrek</h2>
                                </div>
                                <div class="librady_wrper">
                                    <ul class="list-unstyled">
                                        <?php foreach ($data['subjects'] as $subKey=>$subject) {?>
                                        <?php if (!empty($subject->libraryBooks)) {?>
                                        <li>
                                            <label><?php echo ucfirst($subject->name);?></label>
                                            <ul>
                                                <?php foreach ($subject->libraryBooks as $book) {?>
                                                <?php if($book->institute_batch_id == $data['student_profile']->institute_batch_id){?>
                                                <?php if (!in_array($book->id, $data['notShow'])) {?>
                                                <li><label><?php echo  $book->name;?> <a href="<?php echo Yii::app()->createUrl("student/addFav", array("book_id"=>$book->id));?>"><i class="fa fa-star-o" aria-hidden="true"></i></a></label></li>
                                                <?php }?>
                                                <?php }?>
                                                <?php }?>
                                            </ul>
                                        </li>
                                        <?php } }?>
                                    </ul>
                                </div>
                            </div>
                            <div class="librady_block">
                                <div class="libray_heading">
                                    <h2>“My Learnings” - Award 10 Points</h2>
                                </div>
                                <div class="librady_wrper">
                                   <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
                                        'id'=>'filter-form-library',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array(
                                            'class'=>'form-horizontal',
                                            'enctype' => 'multipart/form-data',


                                    ))); ?>
                                        <div class="phAnimate">
                                            <label for="firstname">Book <em>*</em></label>
                                            <input type="text" class="input_field" name="name" id="book-name">
                                        </div>
                                        <div class="phAnimate">
                                            <label for="lastname">Author <em>*</em></label>
                                            <input type="text" class="input_field" name="author" id="book-author">
                                        </div>
                                        <div class="phAnimate">
                                            <label for="lastname" class="active">Subject <em>*</em></label>
                                            <select name="subject" id="book-subject" class="input_field">
                                                <option value="">Select Subject</option>
                                            <?php foreach ($data['subjects'] as $optSubject){?>
                                                <option value="<?php echo $optSubject->id;?>"><?php echo $optSubject->name?></option>
                                            <?php }?>
                                            </select>
                                        </div>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
											<input type="file" id='books-file' name="file" class="filestyle input_field" placeholder="Upload Resume" data-buttonName="btn-primary">
                                           <!-- <span class="btn btn-primary btn-file">
                                                <span class="fileupload-new"> <i class="fa fa-folder-open-o" aria-hidden="true"></i> Browse File</span>
                                                <span class="fileupload-exists"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Browse File</span>         
                                                <input type="file" name="file" id='books-file'/>
                                            </span>
                                            <div class="clearfix"></div>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>-->
                                        </div>
                                    <div class="submit_upload" id="submit_library_book" style="pointer: cursor;">
                                            <div class="site_btn"><a data-toggle="modal" data-target="" class="raised ripple has-ripple" href="javascript:void('0')">Upload</a></div>
                                        </div>
                                        <div class="browse_info">
                                            <!--<span class="restick_Text"><em>*</em> Upload pdf format only</span>-->
                                            <div class="clearfix"></div>
                                            <span>Upload your learnings and get rewarded with 10 points.</span>
                                        </div>
                                    <?php $this->endWidget();?>         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>