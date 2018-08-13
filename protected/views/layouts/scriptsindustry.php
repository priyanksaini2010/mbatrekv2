<script>
    $(document).ready(function() {
        $("#industry-project-form").submit(function() {
            
//            if ($("#LiveProjects_company_name").val() == "") {
//                $("#LiveProjects_company_name").focus()
//                $('#myModalLiveProjects_company_name').modal('show');
//                return false;
//            }
            if ($("#LiveProjects_campus").val() == "") {
                $("#LiveProjects_campus").focus()
                $('#myModalLiveProjects_campus').modal('show');
                return false;
            }
            if ($("#IndustryInternship_location").val() == "") {
                $("#IndustryInternship_location").focus()
                $('#myModalIndustryInternship_location').modal('show');
                return false;
            }
            if ($("#LiveProjects_function").val() == "") {
                $("#LiveProjects_function").focus()
                $('#myModalLiveProjects_function').modal('show');
                return false;
            }
            if ($("#LiveProjects_number_of_students").val() == "" || isNaN($("#LiveProjects_number_of_students").val())) {
                $("#LiveProjects_number_of_students").focus()
                $('#myModalLiveProjects_number_of_students').modal('show');
                return false;
            }
            if ($("#LiveProjects_project_deliverables").val() == "") {
                $("#LiveProjects_project_deliverables").focus()
                $('#myModalLiveProjects_project_deliverables').modal('show');
                return false;
            }
            if ($("#LiveProjects_stipend").val() == "" || isNaN($("#LiveProjects_stipend").val())) {
                $("#LiveProjects_stipend").focus()
                $('#myModalLiveProjects_stipend').modal('show');
                return false;
            }
        });
        $("#industry-internship-form").submit(function() {
            
            if ($("#IndustryInternship_project_title").val() == "") {
                $("#IndustryInternship_project_title").focus()
                $('#myModalLiveProjects_company_name').modal('show');
                return false;
            }
            if ($("#IndustryInternship_number_of_openings").val() == "" || isNaN($("#IndustryInternship_number_of_openings").val())) {
                $("#IndustryInternship_number_of_openings").focus()
                $('#myModalIndustryInternship_number_of_openings').modal('show');
                return false;
            }
            if ($("#IndustryInternship_location").val() == "") {
                $("#IndustryInternship_location").focus()
                $('#myModalIndustryInternship_location').modal('show');
                return false;
            }
            if ($("#IndustryInternship_function").val() == "") {
                $("#IndustryInternship_function").focus()
                $('#myModalLiveProjects_function').modal('show');
                return false;
            }
            
            if ($("#IndustryInternship_description_of_project").val() == "") {
                $("#IndustryInternship_description_of_project").focus()
                $('#myModalIndustryInternship_description_of_project').modal('show');
                return false;
            }
            if ($("#IndustryInternship_stipend").val() == "" || isNaN($("#IndustryInternship_stipend").val())) {
                $("#IndustryInternship_stipend").focus()
                $('#myModalLiveProjects_stipend').modal('show');
                return false;
            }
        });
        $("#industry-job-form").submit(function() {
            
//            if ($("#JobPosting_company_name").val() == "") {
//                $("#JobPosting_company_name").focus()
//                $('#myModalLiveProjects_company_name').modal('show');
//                return false;
//            }
            
            if ($("#IndustryInternship_location").val() == "") {
                $("#IndustryInternship_location").focus()
                $('#myModalIndustryInternship_location').modal('show');
                return false;
            }
            if ($("#JobPosting_position").val() == "") {
                $("#JobPosting_position").focus()
                $('#myModalJobPosting_position').modal('show');
                return false;
            }
            if ($("#JobPosting_function").val() == "") {
                $("#JobPosting_function").focus()
                $('#myModalLiveProjects_function').modal('show');
                return false;
            }
            
            if ($("#JobPosting_description_of_job").val() == "") {
                $("#JobPosting_description_of_job").focus()
                $('#myModalJobPosting_description_of_job').modal('show');
                return false;
            }
            if ($("#JobPosting_preferred_qualification").val() == "") {
                $("#JobPosting_preferred_qualification").focus()
                $('#myModalJobPosting_preferred_qualification').modal('show');
                return false;
            }
            if ($("#JobPosting_number_of_opening").val() == "" || isNaN($("#JobPosting_number_of_opening").val())) {
                $("#JobPosting_number_of_opening").focus()
                $('#myModalIndustryInternship_number_of_openings').modal('show');
                return false;
            }
            if ($("#JobPosting_salary").val() == "" || isNaN($("#JobPosting_salary").val())) {
                $("#JobPosting_salary").focus()
                $('#myModalJobPosting_salary').modal('show');
                return false;
            }
        });
        
        
    });

</script>