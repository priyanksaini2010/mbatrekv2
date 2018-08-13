ALTER TABLE `institute_batch_section_student` DROP FOREIGN KEY `institute_batch_section_student_ibfk_1`; ALTER TABLE `institute_batch_section_student` ADD CONSTRAINT `institute_batch_section_student_ibfk_1` FOREIGN KEY (`institute_batch_section_id`) REFERENCES `institute_batch_section`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_batch_section_student` DROP FOREIGN KEY `institute_batch_section_student_ibfk_2`; ALTER TABLE `institute_batch_section_student` ADD CONSTRAINT `institute_batch_section_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_batch_session_student_attendance` DROP FOREIGN KEY `institute_batch_session_student_attendance_ibfk_1`; ALTER TABLE `institute_batch_session_student_attendance` ADD CONSTRAINT `institute_batch_session_student_attendance_ibfk_1` FOREIGN KEY (`institute_batch_session_id`) REFERENCES `institute_batch_session`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_batch_session_student_attendance` DROP FOREIGN KEY `institute_batch_session_student_attendance_ibfk_2`; ALTER TABLE `institute_batch_session_student_attendance` ADD CONSTRAINT `institute_batch_session_student_attendance_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_batch_student_session_remark` DROP FOREIGN KEY `institute_batch_student_session_remark_ibfk_1`; ALTER TABLE `institute_batch_student_session_remark` ADD CONSTRAINT `institute_batch_student_session_remark_ibfk_1` FOREIGN KEY (`institute_batch_session_id`) REFERENCES `institute_batch_session`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_batch_student_session_remark` DROP FOREIGN KEY `institute_batch_student_session_remark_ibfk_2`; ALTER TABLE `institute_batch_student_session_remark` ADD CONSTRAINT `institute_batch_student_session_remark_ibfk_2` FOREIGN KEY (`student_Id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_student_attendance` DROP FOREIGN KEY `institute_student_attendance_ibfk_1`; ALTER TABLE `institute_student_attendance` ADD CONSTRAINT `institute_student_attendance_ibfk_1` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_student_attendance` DROP FOREIGN KEY `institute_student_attendance_ibfk_2`; ALTER TABLE `institute_student_attendance` ADD CONSTRAINT `institute_student_attendance_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `library_book_student` DROP FOREIGN KEY `library_book_student_ibfk_1`; ALTER TABLE `library_book_student` ADD CONSTRAINT `library_book_student_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `library_books`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `library_book_student` DROP FOREIGN KEY `library_book_student_ibfk_2`; ALTER TABLE `library_book_student` ADD CONSTRAINT `library_book_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `module_assignment_student_score` DROP FOREIGN KEY `module_assignment_student_score_ibfk_1`; ALTER TABLE `module_assignment_student_score` ADD CONSTRAINT `module_assignment_student_score_ibfk_1` FOREIGN KEY (`module_assignment_id`) REFERENCES `module_assignment`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_assignment_student_score` DROP FOREIGN KEY `module_assignment_student_score_ibfk_2`; ALTER TABLE `module_assignment_student_score` ADD CONSTRAINT `module_assignment_student_score_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `module_student_rating` DROP FOREIGN KEY `module_student_rating_ibfk_1`; ALTER TABLE `module_student_rating` ADD CONSTRAINT `module_student_rating_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_student_rating` DROP FOREIGN KEY `module_student_rating_ibfk_2`; ALTER TABLE `module_student_rating` ADD CONSTRAINT `module_student_rating_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `student_resume` DROP FOREIGN KEY `student_resume_ibfk_1`; ALTER TABLE `student_resume` ADD CONSTRAINT `student_resume_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `student_session_feedback` DROP FOREIGN KEY `student_session_feedback_ibfk_1`; ALTER TABLE `student_session_feedback` ADD CONSTRAINT `student_session_feedback_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `student_session_feedback` DROP FOREIGN KEY `student_session_feedback_ibfk_2`; ALTER TABLE `student_session_feedback` ADD CONSTRAINT `student_session_feedback_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `institute_batch_session`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_batch_student_session_remark_response` DROP FOREIGN KEY `institute_batch_student_session_remark_response_ibfk_1`; ALTER TABLE `institute_batch_student_session_remark_response` ADD CONSTRAINT `institute_batch_student_session_remark_response_ibfk_1` FOREIGN KEY (`institute_batch_student_session_remark_id`) REFERENCES `institute_batch_student_session_remark`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_batch_student_session_remark_response` DROP FOREIGN KEY `institute_batch_student_session_remark_response_ibfk_2`; ALTER TABLE `institute_batch_student_session_remark_response` ADD CONSTRAINT `institute_batch_student_session_remark_response_ibfk_2` FOREIGN KEY (`response_given_by`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_1`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_1` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_2`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_3`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_3` FOREIGN KEY (`industry_1`) REFERENCES `industry_option`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_4`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_4` FOREIGN KEY (`industry_2`) REFERENCES `industry_option`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_5`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_5` FOREIGN KEY (`industry_3`) REFERENCES `industry_option`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_6`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_6` FOREIGN KEY (`industry_4`) REFERENCES `industry_option`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `students` DROP FOREIGN KEY `students_ibfk_7`;
ALTER TABLE `students` ADD  CONSTRAINT `students_ibfk_7` FOREIGN KEY (`industry_5`) REFERENCES `industry_option`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;


ALTER TABLE `casestudy_student_score` DROP FOREIGN KEY `casestudy_student_score_ibfk_2`; ALTER TABLE `casestudy_student_score` ADD CONSTRAINT `casestudy_student_score_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `casestudy_student_score` DROP FOREIGN KEY `casestudy_student_score_ibfk_1`; ALTER TABLE `casestudy_student_score` ADD CONSTRAINT `casestudy_student_score_ibfk_1` FOREIGN KEY (`casestudy_id`) REFERENCES `module_casestudy`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;


ALTER TABLE `institute_batch_section` DROP FOREIGN KEY `institute_batch_section_ibfk_1`; ALTER TABLE `institute_batch_section` ADD CONSTRAINT `institute_batch_section_ibfk_1` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `institute_batch_session` DROP FOREIGN KEY `institute_batch_session_ibfk_2`; ALTER TABLE `institute_batch_session` ADD CONSTRAINT `institute_batch_session_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `module_assignment` DROP FOREIGN KEY `module_assignment_ibfk_1`; ALTER TABLE `module_assignment` ADD CONSTRAINT `module_assignment_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_assignment` DROP FOREIGN KEY `module_assignment_ibfk_2`; ALTER TABLE `module_assignment` ADD CONSTRAINT `module_assignment_ibfk_2` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `module_casestudy` DROP FOREIGN KEY `module_casestudy_ibfk_1`; ALTER TABLE `module_casestudy` ADD CONSTRAINT `module_casestudy_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_casestudy` DROP FOREIGN KEY `module_casestudy_ibfk_2`; ALTER TABLE `module_casestudy` ADD CONSTRAINT `module_casestudy_ibfk_2` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_casestudy` DROP FOREIGN KEY `module_casestudy_ibfk_3`; ALTER TABLE `module_casestudy` ADD CONSTRAINT `module_casestudy_ibfk_3` FOREIGN KEY (`function_id`) REFERENCES `casestudy_functions`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `module_webinar` DROP FOREIGN KEY `module_webinar_ibfk_1`; ALTER TABLE `module_webinar` ADD CONSTRAINT `module_webinar_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_webinar` DROP FOREIGN KEY `module_webinar_ibfk_2`; ALTER TABLE `module_webinar` ADD CONSTRAINT `module_webinar_ibfk_2` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_webinar` DROP FOREIGN KEY `module_webinar_ibfk_3`; ALTER TABLE `module_webinar` ADD CONSTRAINT `module_webinar_ibfk_3` FOREIGN KEY (`institute_course_id`) REFERENCES `institute_courses`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `institute_batch_session` DROP FOREIGN KEY `institute_batch_session_ibfk_1`; ALTER TABLE `institute_batch_session` ADD CONSTRAINT `institute_batch_session_ibfk_1` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `module_assigment_quiz` DROP FOREIGN KEY `module_assigment_quiz_ibfk_1`; ALTER TABLE `module_assigment_quiz` ADD CONSTRAINT `module_assigment_quiz_ibfk_1` FOREIGN KEY (`module_assignment_quiz_id`) REFERENCES `module_assignment`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `module_assigjment_quiz_answer` DROP FOREIGN KEY `module_assigjment_quiz_answer_ibfk_1`; ALTER TABLE `module_assigjment_quiz_answer` ADD CONSTRAINT `module_assigjment_quiz_answer_ibfk_1` FOREIGN KEY (`module_assigment_quiz_id`) REFERENCES `module_assigment_quiz`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_courses` DROP FOREIGN KEY `institute_courses_ibfk_1`; ALTER TABLE `institute_courses` ADD CONSTRAINT `institute_courses_ibfk_1` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_course` DROP FOREIGN KEY `institute_course_ibfk_1`; ALTER TABLE `institute_course` ADD CONSTRAINT `institute_course_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institutes`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_course` DROP FOREIGN KEY `institute_course_ibfk_2`; ALTER TABLE `institute_course` ADD CONSTRAINT `institute_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_interaction_with_placemnet` DROP FOREIGN KEY `institute_interaction_with_placemnet_ibfk_1`; ALTER TABLE `institute_interaction_with_placemnet` ADD CONSTRAINT `institute_interaction_with_placemnet_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institutes`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_interaction_with_placemnet` DROP FOREIGN KEY `institute_interaction_with_placemnet_ibfk_2`; ALTER TABLE `institute_interaction_with_placemnet` ADD CONSTRAINT `institute_interaction_with_placemnet_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `module_session` DROP FOREIGN KEY `module_session_ibfk_1`; ALTER TABLE `module_session` ADD CONSTRAINT `module_session_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `module_session` DROP FOREIGN KEY `module_session_ibfk_2`; ALTER TABLE `module_session` ADD CONSTRAINT `module_session_ibfk_2` FOREIGN KEY (`institute_batch_id`) REFERENCES `institute_batches`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `casestudy_quiz` DROP FOREIGN KEY `casestudy_quiz_ibfk_1`; ALTER TABLE `casestudy_quiz` ADD CONSTRAINT `casestudy_quiz_ibfk_1` FOREIGN KEY (`casestudy_id`) REFERENCES `module_casestudy`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `casestudy_quiz_anwers` DROP FOREIGN KEY `casestudy_quiz_anwers_ibfk_1`; ALTER TABLE `casestudy_quiz_anwers` ADD CONSTRAINT `casestudy_quiz_anwers_ibfk_1` FOREIGN KEY (`casestudy_quiz_id`) REFERENCES `casestudy_quiz`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `module_session_attendance` DROP FOREIGN KEY `module_session_attendance_ibfk_1`; ALTER TABLE `module_session_attendance` ADD CONSTRAINT `module_session_attendance_ibfk_1` FOREIGN KEY (`module_session_id`) REFERENCES `module_session`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `institute_interaction_with_placemnet_attendance` DROP FOREIGN KEY `institute_interaction_with_placemnet_attendance_ibfk_1`; ALTER TABLE `institute_interaction_with_placemnet_attendance` ADD CONSTRAINT `institute_interaction_with_placemnet_attendance_ibfk_1` FOREIGN KEY (`institute_interaction_with_placemnet_id`) REFERENCES `institute_interaction_with_placemnet`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `institute_interaction_with_placemnet_plan_of_action` DROP FOREIGN KEY `institute_interaction_with_placemnet_plan_of_action_ibfk_1`; ALTER TABLE `institute_interaction_with_placemnet_plan_of_action` ADD CONSTRAINT `institute_interaction_with_placemnet_plan_of_action_ibfk_1` FOREIGN KEY (`institute_interaction_with_placemnet_id`) REFERENCES `institute_interaction_with_placemnet`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;


UPDATE `content_json` SET `data` = '<div class="container">
<div class="main_heading">
<h4>Careers</h4>
<h3>Careers at MBAtrek</h3>
</div>
<h3 class="career_text"><span>The Rewarding Career</span> You Are Looking For Is At <span class="text_capti"> MBAtrek</span></h3>
</div>
<div class="career_container"><img src="images/career_banner.png" alt="" />
<h3 class="career_text"><span>We\'re the only one </span> &amp; We\'ve just begun</h3>
</div>
<div class="container">
<div class="career_Steps">
<div class="career_stps_blk">
<h3>MBAtrek Isglobally unique</h3>
</div>
<div class="career_stps_blk2">
<h3>We offer &lsquo;end-to-end&rsquo; solution to Institutes &amp; Industry</h3>
</div>
<div class="career_stps_blk3">
<h3>We create life-long impact on the mind-set &amp; capabilities of students</h3>
</div>
<div class="career_stps_blk4">
<h3>We build Character, Hope, Attitude, Skill &amp; Enthusiasm</h3>
</div>
</div>
<div class="cant_wait margin_bottom_45">
<h3>We Can&rsquo;t wait to meet you</h3>
<div class="main_register">
<div class="site_btn"><a class="raised ripple" href="javascript:void(0);" id="open-position">Search Open Positions</a></div>
</div>
</div>
</div>' WHERE `content_json`.`id` = 5;

ALTER TABLE `institutes` DROP FOREIGN KEY `institutes_ibfk_1`; ALTER TABLE `institutes` ADD CONSTRAINT `institutes_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `university_course_batch` DROP FOREIGN KEY `university_course_batch_ibfk_1`; ALTER TABLE `university_course_batch` ADD CONSTRAINT `university_course_batch_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `institute_user` DROP FOREIGN KEY `institute_user_ibfk_1`; ALTER TABLE `institute_user` ADD CONSTRAINT `institute_user_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institutes`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT; ALTER TABLE `institute_user` DROP FOREIGN KEY `institute_user_ibfk_2`; ALTER TABLE `institute_user` ADD CONSTRAINT `institute_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT

ALTER TABLE `institute_batch_session` ADD `time` TIME NULL AFTER `session_date`;
ALTER TABLE `institute_batch_session` CHANGE `time` `time` VARCHAR(40) NULL DEFAULT NULL;
ALTER TABLE `institute_batch_session` CHANGE `time` `session_time` VARCHAR(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;

ALTER TABLE `student_session_feedback` ADD `rating_2` INT NOT NULL DEFAULT '1' AFTER `rating`, ADD `rating_3` INT NOT NULL DEFAULT '1' AFTER `rating_2`, ADD `rating_4` INT NOT NULL DEFAULT '1' AFTER `rating_3`, ADD `rating_5` INT NOT NULL DEFAULT '1' AFTER `rating_4`;
ALTER TABLE `institute_batch_session_student_attendance` ADD `section_id` INT NOT NULL AFTER `student_id`, ADD INDEX (`section_id`);
ALTER TABLE `institute_batch_session_student_attendance` ADD FOREIGN KEY (`section_id`) REFERENCES `institute_batch_section`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `institute_user` ADD `designation` VARCHAR(255) NULL AFTER `user_id`, ADD `profile_pic` VARCHAR(255) NULL AFTER `designation`;


ALTER TABLE `institute_user` ADD `prog_1` VARCHAR(255) NULL AFTER `profile_pic`, ADD `prog_2` VARCHAR(255) NULL AFTER `prog_1`, ADD `prog_3` VARCHAR(255) NULL AFTER `prog_2`, ADD `live_1` VARCHAR(255) NULL AFTER `prog_3`, ADD `live_2` VARCHAR(255) NULL AFTER `live_1`, ADD `live_3` VARCHAR(255) NULL AFTER `live_2`, ADD `int_1` VARCHAR(255) NULL AFTER `live_3`, ADD `int_2` VARCHAR(255) NULL AFTER `int_1`, ADD `int_3` VARCHAR(255) NULL AFTER `int_2`;

ALTER TABLE `institute_user` ADD `mobile` INT NULL AFTER `int_3`;