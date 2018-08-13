<script>
    /* Accordian FOR FAQ Js */
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion1'), false);
});
    $(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
    $('#mix-wrapper').mixItUp({
		  load: {
			sort: 'order:asc'
		  },
			animation: {
			effects: 'fade rotateZ(-180deg)',
			duration: 700
		  },
		  selectors: {
			target: '.mix-target',
			filter: '.filter-btn',
			sort: '.sort-btn'
		  },
		  callbacks: {
			onMixEnd: function(state){
			  console.log(state)
			}
		  }
		});
    $(":file").filestyle({buttonName: "btn-primary"});
</script>

<script>
    function validateEmail(emailField) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField) == false)
        {

            return false;
        }

        return true;

    }
    function getExtension(path) {
        var basename = path.split(/[\\/]/).pop(), // extract file name from full path ...
                // (supports `\\` and `/` separators)
                pos = basename.lastIndexOf(".");       // get last position of `.`

        if (basename === "" || pos < 1)            // if file name is empty or ...
            return "";                             //  `.` not found (-1) or comes first (0)

        return basename.slice(pos + 1);            // extract extension ignoring `.`
    }
    function openComingSoon() {
        $('#myModalComingSoon').modal('show');
    }
    $(document).ready(function() {
	 $("#share").jsSocials({
    showLabel: false,
    showCount: false,
    shares: ["email", "twitter", "facebook", "googleplus", "linkedin"]
});

        $("#Users_program").change(function() {
            var valin = $(this).val();
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('site/batch'); ?>',
                type: 'post',
                data: {
                    'institute_course_id': valin
                },
                success: function(data) {
                    $("#Users_batch").html(data);
                }
            })
        });

        $("#institute_id").change(function() {
            var valin = $(this).val();
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('site/getprograms'); ?>',
                type: 'post',
                data: {
                    'institute_id': valin
                },
                success: function(data) {
                    $("#Users_program").html(data);
                }
            });
        });
        $("#example10").dateDropdowns({
            submitFieldName: 'example10',
            required: true
        });
        $("#example11").dateDropdowns({
            submitFieldName: 'example11',
            required: true
        });
      //  $('.menu_list').slideAndSwipe();
        $("#blog-comment").submit(function() {
            if ($("#comment").val() == "") {
                $("#comment").focus()
                $('#myModalmessage').modal('show');
                return false;
            }
            if ($("#name").val() == "") {
                $("#name").focus()
                $('#myModalname').modal('show');
                return false;
            }
            if ($("#email").val() == "" || !validateEmail($("#email").val())) {
                $("#email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
        })
        $("#industry-form").submit(function() {
            if ($("#Users_email").val() == "" || !validateEmail($("#Users_email").val())) {
                $("#Users_email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#Users_password").val() == "") {
                $("#Users_password").focus()
                $('#myModalpassword').modal('show');
                return false;
            }
            if ($("#Users_fname").val() == "") {
                $("#Users_fname").focus()
                $('#myModalfname').modal('show');
                return false;
            }
            if ($("#Users_lname").val() == "") {
                $("#Users_lname").focus()
                $('#myModallname').modal('show');
                return false;
            }
        });
        $("#mba-student-form").submit(function() {
            if ($("#Users_email").val() == "" || !validateEmail($("#Users_email").val())) {
                $("#Users_email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#Users_password").val() == "") {
                $("#Users_password").focus()
                $('#myModalpassword').modal('show');
                return false;
            }
            if ($("#Users_fname").val() == "") {
                $("#Users_fname").focus()
                $('#myModalfname').modal('show');
                return false;
            }
            if ($("#Users_lname").val() == "") {
                $("#Users_lname").focus()
                $('#myModallname').modal('show');
                return false;
            }
        });
        //Hand Book
        $("#handbook-form").submit(function() {
            
            if ($("#HandbookDownload_first_name").val() == "") {
                $("#HandbookDownload_first_name").focus()
                $('#myModalfname').modal('show');
                return false;
            }
            if ($("#HandbookDownload_last_name").val() == "") {
                $("#HandbookDownload_last_name").focus()
                $('#myModallname').modal('show');
                return false;
            }
            if ($("#HandbookDownload_email_address").val() == "" || !validateEmail($("#HandbookDownload_email_address").val())) {
                $("#HandbookDownload_email_address").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            
        });
        $("#login-form").submit(function() {
            if ($("#LoginForm_username").val() == "" || !validateEmail($("#LoginForm_username").val())) {
                $("#LoginForm_username").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#LoginForm_password").val() == "") {
                $("#LoginForm_password").focus()
                $('#myModalpassword').modal('show');
                return false;
            }
        });
        $("#forgot-form").submit(function() {
            if ($("#Users_username").val() == "" || !validateEmail($("#Users_username").val())) {
                $("#Users_username").focus()
                $('#myModalemail').modal('show');
                return false;
            }
        });
        $(".remark").click(function() {
                $.ajax({
                type: 'post',
                url : "<?php echo Yii::app()->createUrl("student/addremarks");?>",
                data : {
                    session_id : $(this).attr("alt"),
                    rating : $(this).val(),
                },
                success: function(data) {
                    if (data = "ok") {
                        $('#myModalthankfed').modal('show');
                    } else {
                         $('#myModalfederr').modal('show');
                    }
                    
                }
            });
        });
        $("#ebroucher-download-form-form").submit(function() {
            if ($("#EbroucherDownloadForm_email").val() == "" || !validateEmail($("#EbroucherDownloadForm_email").val())) {
                $("#EbroucherDownloadForm_email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#EbroucherDownloadForm_first_name").val() == "") {
                $("#EbroucherDownloadForm_first_name").focus()
                $('#myModalfname').modal('show');
                return false;
            }
            if ($("#EbroucherDownloadForm_last_name").val() == "") {
                $("#EbroucherDownloadForm_last_name").focus()
                $('#myModallname').modal('show');
                return false;
            }
            var win = window.open('');
            window.oldOpen = window.open;
            window.open = function(url) { // reassignment function
                win.location = url;
                window.open = oldOpen;
                win.focus();
            }
            
            $.ajax({
                type: 'post',
                data: {
                    "EbroucherDownloadForm[email]": $("#EbroucherDownloadForm_email").val(),
                    "EbroucherDownloadForm[first_name]": $("#EbroucherDownloadForm_first_name").val(),
                    "EbroucherDownloadForm[last_name]": $("#EbroucherDownloadForm_last_name").val(),
                    "EbroucherDownloadForm[phone_number]": $("#EbroucherDownloadForm_phone_number").val()
                },
                success: function(data) {
                    var decodedData = $.parseJSON(data);
//                                alert(decodedData);
                    window.open(decodedData.url, '_blank');
                    window.location.href = "<?php echo Yii::app()->createUrl("site/index") ?>"
                }
            });
            return false;
        });
        $("#feedback-form").submit(function() {
            if ($("#Feedback_email").val() != "") {
                if (!validateEmail($("#Feedback_email").val())) {
                    $("#Feedback_email").focus()
                    $('#myModalemail').modal('show');
                    return false;
                }
            }
            if ($("#Feedback_message").val() == "") {
                $("#Feedback_message").focus()
                $('#myModalmessage').modal('show');
                return false;
            }
        });
        $("#submit_library_book").click(function() {
            if ($("#book-name").val() == "") {
                $("#book-name").focus()
                $('#myModalBookName').modal('show');
                return false;
            }
            if ($("#book-author").val() == "") {
                $("#book-author").focus()
                $('#myModalAuthor').modal('show');
                return false;
            }
            if ($("#book-subject").val() == "") {
                $("#book-subject").focus()
                $('#myModalSubjectBook').modal('show');
                return false;
            }
            if ($("#books-file").val() == "") {
                $("#books-file").focus()
                $('#myModalBookFile').modal('show');
                return false;
            }
            // get the file name, possibly with path (depends on browser)
            var filename = $("#books-file").val();

            // Use a regular expression to trim everything before final dot
            var extension = filename.replace(/^.*\./, '');

            // Iff there is no dot anywhere in filename, we would have extension == filename,
            // so we account for this possibility now
            if (extension == filename) {
                extension = '';
            } else {
                // if there is an extension, we convert to lower case
                // (N.B. this conversion will not effect the value of the extension
                // on the file upload.)
                extension = extension.toLowerCase();
            }
//            if (extension != "pdf" && ) {
//                $("#books-file").focus()
//                $('#myModalBookFile').modal('show');
//                return false;
//            }
            $("#filter-form-library").submit();

        });
        $("#filter-batch").change(function() {
            $("#filter-form-attendance").submit();
        })
        $("#filter-module").change(function() {
            $("#filter-form-attendance").submit();
        })
        $("#filter-batch-score").change(function() {
            $("#filter-form-score").submit();
        })
        
        
        $("#filter-module-score").change(function() {
            $("#filter-form-score").submit();
        })
        $("#filter-module-interationlanding").change(function() {
            $("#filter-form-interationlanding").submit();
        })
        $("#id-past").change(function() {
            $("#filter-form-interationlanding-pas").submit();
        })
        $("#functions-casestudy").change(function() {
            $("#filter-form-casestudy").submit();
        })
        $("#module-assignments").change(function() {
            $("#filter-form-assigment").submit();
        })
	
	$("#sub-query-sub").click(function(){
	    $("#filter-form-query").submit();
	});

        $("#submit-quiz-case").click(function() {
            var jsonObj = [];
            $(".quize_question_all").each(function(i, obj) {
                if ($(this).is(":checked")) {
                    var quizid = $(this).attr('src');
                    var answer = $(this).attr('value');
                    var item = {}
                    item ["question_id"] = quizid;
                    item ["answer_id"] = answer;
                    jsonObj.push(item);
                }
            });
            var casestudy_id = $("#casestudy_id").val();
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('student/checkCaseStudyAnswer'); ?>',
                type: 'post',
                data: {
                    'answers': jsonObj,
                    'casestudy_id': casestudy_id
                },
                success: function(data) {
                    var decodedData = $.parseJSON(data);
                    if (decodedData.status == "success") {
                        $("#total_answered").html(decodedData.data.question_answered);
                        $("#total_correct").html(decodedData.data.correct);
                        $("#score").html(decodedData.data.student_score);
                        $("#total_score").html(decodedData.data.total_score);
                        $("#myModal1").modal('show');
                    } else {
                        $("#message_errors").html(decodedData.msg);
                        $("#myModalQuizError").modal('show');
                    }

                }
            })


        })
        $('#myModal1').on('hidden.bs.modal', function (e) {
            window.location.href = "<?php echo Yii::app()->createUrl("student/portal") ?>"
        })
        $("#check-close").click(function() {
            if (!confirm("Are you sure you want to close this assigment? No further changes will be allowed.")) {
                return false;
            }
        });
        $("#submit-quiz-assigment").click(function() {
            var jsonObj = [];
            $(".quize_question_all").each(function(i, obj) {
                if ($(this).is(":checked")) {
                    var quizid = $(this).attr('src');
                    var answer = $(this).attr('value');
                    var item = {}
                    item ["question_id"] = quizid;
                    item ["answer_id"] = answer;
                    jsonObj.push(item);
                }
            });
            var assigment_id = $("#assigment_id").val();
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('student/checkAssigmentAnswer'); ?>',
                type: 'post',
                data: {
                    'answers': jsonObj,
                    'assigment_id': assigment_id
                },
                success: function(data) {
                    var decodedData = $.parseJSON(data);
                    if (decodedData.status == "success") {
                        $("#total_answered").html(decodedData.data.question_answered);
                        $("#total_correct").html(decodedData.data.correct);
                        $("#score").html(decodedData.data.student_score);
                        $("#total_score").html(decodedData.data.total_score);
                        $("#myModal1").modal('show');
                    } else {
                        $("#message_errors").html(decodedData.msg);
                        $("#myModalQuizError").modal('show');
                    }

                }
            })


        })
        $("#contact-form").submit(function() {
            if ($("#Contact_email").val() == "" || !validateEmail($("#Contact_email").val())) {
                $("#Contact_email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#Contact_name").val() == "") {
                $("#Contact_name").focus()
                $('#myModalname').modal('show');
                return false;
            }
            if ($("#Contact_phone").val() == "") {
                $("#Contact_phone").focus()
                $('#myModalPhone').modal('show');
                return false;
            }
            if ($("#Contact_subject").val() == "") {
                $("#Contact_subject").focus()
                $('#myModalSubject').modal('show');
                return false;
            }
            if ($("#Contact_message").val() == "") {
                $("#Contact_message").focus()
                $('#myModalTxtMsg').modal('show');
                return false;
            }
        });
        $("#submit_library_profile_ind").click(function() {
            $("#filter-form-profile-ind").submit();
        })
        $("#submit_library_profile").click(function() {
            $("#filter-form-profile").submit();
        })
        $("#sub-thought").click(function() {
            $("#industry-session-form").submit();
        })
        
        $("#industry-session-form").submit(function() {
            if ($("#Email").val() == "") {
                $("#Email").focus()
                $('#myModal-thought').modal('show');
                return false;
            }
        })
            
        $("#talk-to-advisory-form").submit(function() {
            
            if ($("#TalkToAdvisory_name").val() == "") {
                $("#TalkToAdvisory_name").focus()
                $('#myModalname').modal('show');
                return false;
            }
            if ($("#TalkToAdvisory_email").val() == "" || !validateEmail($("#TalkToAdvisory_email").val())) {
                $("#TalkToAdvisory_email").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#TalkToAdvisory_message").val() == "") {
                $("#TalkToAdvisory_message").focus()
                $('#myModalTxtMsg').modal('show');
                return false;
            }
            if ($("#TalkToAdvisory_area").val() == "") {
                $("#TalkToAdvisory_area").focus()
                $('#myModallnamecarrer').modal('show');
                return false;
            }
        });
        
        $("#talk-to-advisory-form-registered").submit(function() {
            if ($("#mbatrek_id").val() == "" || !validateEmail($("#mbatrek_id").val())) {
                $("#mbatrek_id").focus()
                $('#myModalemail').modal('show');
                return false;
            }
            if ($("#message2").val() == "") {
                $("#message2").focus()
                $('#myModalTxtMsg').modal('show');
                return false;
            }
            if ($("#area2").val() == "") {
                $("#area2").focus()
                $('#myModallnamecarrer').modal('show');
                return false;
            }
        });
        $("#filter-form-query").submit(function() {
            if ($("#query").val() == "") {
                $("#query").focus()
                $('#myModalquery').modal('show');
                return false;
            }
        });
        $("#filter-form-profile-ind").submit(function() {
            if ($("#name").val() == "") {
                $("#name").focus()
                $('#myModalindname').modal('show');
                return false;
            }
            if ($("#business_focus").val() == "") {
                $("#business_focus").focus()
                $('#myModal-business_focus').modal('show');
                return false;
            }
            if ($("#profile").val() == "") {
                $("#profile").focus()
                $('#myModal-profile').modal('show');
                return false;
            }
            if ($("#experience").val() == "") {
                $("#experience").focus()
                $('#myModal-experience').modal('show');
                return false;
            }
            if ($("#skills").val() == "") {
                $("#skills").focus()
                $('#myModal-skills').modal('show');
                return false;
            }
//            if ($("#business_school_prefed").val() == "") {
//                $("#business_school_prefed").focus()
//                $('#myModal-business_school_prefed').modal('show');
//                return false;
//            }
//            if ($("#area_of_interest").val() == "") {
//                $("#area_of_interest").focus()
//                $('#myModal-area_of_interest').modal('show');
//                return false;
//            }
            if ($("#address").val() == "") {
                $("#address").focus()
                $('#myModal-address').modal('show');
                return false;
            }
            if ($("#mobile_number").val() == "" || isNaN($("#mobile_number").val())) {
                $("#mobile_number").focus()
                $('#myModal-mobile_number').modal('show');
                return false;
            }
            if ($("#office_number").val() == "") {
                $("#office_number").focus()
                $('#myModal-office_number').modal('show');
                return false;
            }
            if ($("#founder_name").val() == "") {
                $("#founder_name").focus()
                $('#myModal-founder_name').modal('show');
                return false;
            }
//            if ($("#internship").val() == "") {
//                $("#internship").focus()
//                $('#myModal-internship').modal('show');
//                return false;
//            }
//            if ($("#placement").val() == "") {
//                $("#placement").focus()
//                $('#myModal-placement').modal('show');
//                return false;
//            }
//            if ($("#live_project").val() == "") {
//                $("#live_project").focus()
//                $('#myModal-live_project').modal('show');
//                return false;
//            }
            if ($("#designation").val() == "") {
                $("#designation").focus()
                $('#myModal-designation').modal('show');
                return false;
            }
            if ($("#email").val() == "" || !validateEmail($("#email").val())) {
                $("#email").focus()
                $('#myModal-email').modal('show');
                return false;
            }
        });
        $("#filter-form-profile-resume").submit(function() {
            if ($("#profile_header").val() == "") {
                $("#profile_header").focus()
                $('#myModalprofile_header').modal('show');
                return false;
            }
            if ($("#objective").val() == "") {
                $("#objective").focus()
                $('#myModalobjective').modal('show');
                return false;
            }
            if ($("#project_undertaken").val() == "") {
                $("#project_undertaken").focus()
                $('#myModalproject_undertaken').modal('show');
                return false;
            }
            if ($("#achievement_and_key_skills").val() == "") {
                $("#achievement_and_key_skills").focus()
                $('#myModalachievement_and_key_skills').modal('show');
                return false;
            }
            if ($("#hobbies").val() == "") {
                $("#hobbies").focus()
                $('#myModalhobbies').modal('show');
                return false;
            }
            if ($("#personal_details").val() == "") {
                $("#personal_details").focus()
                $('#myModalpersonal_details').modal('show');
                return false;
            }
            
        });
        $("#industry-consulting-form").submit(function() {
            if ($("#IndustryProjectWithFaculty_assignment_title").val() == "") {
                $("#IndustryProjectWithFaculty_assignment_title").focus()
                $('#myModal-IndustryProjectWithFaculty_assignment_title').modal('show');
                return false;
            }
            if ($("#IndustryProjectWithFaculty_deliverable_requirement").val() == "") {
                $("#IndustryProjectWithFaculty_deliverable_requirement").focus()
                $('#myModal-IndustryProjectWithFaculty_deliverable_requirement').modal('show');
                return false;
            }
            if ($("#IndustryProjectWithFaculty_desired_experience").val() == "") {
                $("#IndustryProjectWithFaculty_desired_experience").focus()
                $('#myModal-IndustryProjectWithFaculty_desired_experience').modal('show');
                return false;
            }
            if ($("#IndustryProjectWithFaculty_budget").val() == "" || isNaN($("#IndustryProjectWithFaculty_budget").val())) {
                $("#IndustryProjectWithFaculty_budget").focus()
                $('#myModal-IndustryProjectWithFaculty_budget').modal('show');
                return false;
            }
            if ($("#IndustryProjectWithFaculty_time_scedule").val() == "") {
                $("#IndustryProjectWithFaculty_time_scedule").focus()
                $('#myModal-IndustryProjectWithFaculty_time_scedule').modal('show');
                return false;
            }
            
            
        });
        $("#talk_subit").click(function() {
            $("#talk-to-advisory-form").submit();
        })
        $("#talk_submit").click(function() {
            $("#talk-to-advisory-form-registered").submit();
        })
<?php if (isset($_REQUEST['thank']) && $_REQUEST['thank'] == 1) { ?>

            $("#myModalthank").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankh']) && $_REQUEST['thankh'] == 1) { ?>

            $("#myModalthankh").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thanksession']) && $_REQUEST['thanksession'] == 1) { ?>

            $("#myModalsession").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thanksessionup']) && $_REQUEST['thanksessionup'] == 1) { ?>

            $("#myModalsessionup").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankinternshipdel']) && $_REQUEST['thankinternshipdel'] == 1) { ?>

            $("#myModalinternshipdel").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankprojectdel']) && $_REQUEST['thankprojectdel'] == 1) { ?>

            $("#myModalprojectdel").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankjobndel']) && $_REQUEST['thankjobndel'] == 1) { ?>

            $("#myModaljobdel").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thanksessiondel']) && $_REQUEST['thanksessiondel'] == 1) { ?>

            $("#myModalsessiondel").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankp']) && $_REQUEST['thankp'] == 1) { ?>

            $("#myModalthankp").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankBook']) && $_REQUEST['thankBook'] == 1) { ?>

            $("#myModalthankBook").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankc']) && $_REQUEST['thankc'] == 1) { ?>

            $("#myModalthankc").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankfaq']) && $_REQUEST['thankfaq'] == 1) { ?>

            $("#myModalthankfaq").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankd']) && $_REQUEST['thankd'] == 1) { ?>

            $("#myModalthankd").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankr']) && $_REQUEST['thankr'] == 1) { ?>

            $("#myModalthankresume").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankindupdate']) && $_REQUEST['thankindupdate'] == 1) { ?>

            $("#myModalthankindupdate").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankfor']) && $_REQUEST['thankfor'] == 1) { ?>

            $("#myModalthankfor").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['tv']) && $_REQUEST['tv'] == 1) { ?>

            $("#myModaltv").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankforin']) && $_REQUEST['thankforin'] == 1) { ?>

            $("#myModalforgotinvalid").modal('show');

<?php } ?>
<?php if (isset($_REQUEST['thankreg']) && $_REQUEST['thankreg'] == 1) { ?>

        $("#myModalthankregister").modal('show');

<?php } ?>
<?php if (isset($this->errors) && count($this->errors) > 0) { ?>

            $("#myModalclient").modal('show');

<?php } ?>
<?php if (isset($this->success) && count($this->success) > 0) { ?>
            $("#myModalSuccess").modal('show');
            window.setTimeout(function() {
                location.href = "<?php echo Yii::app()->createUrl('site/index'); ?>";
            }, 2500);
<?php } ?>

    });


</script>
<script type="text/javascript">


</script>
<script>
    $('#add_more_link').click(function() {
        $('.industry_field:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="industry" name="profile_industry[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
    });

    $('#company_more').click(function() {
        $('.company_filed:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Companies" name="profile_companies[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
    });

    $('#internship_link').click(function() {
        $('.internship_filed:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Internship" name="profile_intership[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
    });

    $('#live_linkd').click(function() {
        $('.live_project:last').after('<div class="col-md-12 col-sm-12 col-xs-12"><div class="phAnimate"><input type="text" placeholder="Live Project" name="profile_liveproject[]" class="input_field" id="Email"><a class="add_more_link remove_link" href="javascript:void(0);">Remove</a></div></div>');
    });

    $('.edit_profile_form').on('click', '.remove_link', function() {
//	alert('hi');
        $(this).parent().remove();
    });

</script>
<script>
    $(document).ready(function() {
        $('.menu_list').slideAndSwipe();
    });
</script>
<script>
		$(document).ready(function(){
			
			$("#addCF").click(function(){
				
				$("#customFields").append('<tr><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><div class="sibmit_form"><div class="site_btn"><button class="raised ripple has-ripple " id="remCF" type="button">Remove</button></div></div></td></tr>');
			});
			$("#customFields").on('click','#remCF',function(){
				$(this).parent().parent().parent().parent().remove();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			
			$("#addCF_1").click(function(){
				
				$("#customFields_work").append('<tr><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><div class="sibmit_form"><div class="site_btn"><button class="raised ripple has-ripple " id="remCF1" type="button">Remove</button></div></div></td></tr>');
			});
			$("#customFields_work").on('click','#remCF1',function(){
				$(this).parent().parent().parent().parent().remove();
			});
		});
	</script>