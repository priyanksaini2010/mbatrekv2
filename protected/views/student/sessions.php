<?php

/**
 * @author  Priyank Saini
 * @email   priyanksaini2010@gmail.com
 * @website https://www.mbatrek.com
 * */
class Calendar {

    /**
     * Constructor
     */
    public function __construct() {
	$this->naviHref = htmlentities($_SERVER['PHP_SELF']);
    }

    /*     * ******************* PROPERTY ******************* */

    private $dayLabels = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
    private $currentYear = 0;
    private $currentMonth = 0;
    private $currentDay = 0;
    private $currentDate = null;
    private $daysInMonth = 0;
    private $naviHref = null;

    /*     * ******************* PUBLIC ********************* */

    /**
     * print out the calendar
     */
    public function show() {
	$year = isset($_GET['year'])?$_GET['year']:date("Y");

	$month = isset($_GET['month'])?$_GET['month']:date("m");

	if (null == $year && isset($_GET['year'])) {

	    $year = $_GET['year'];
	} else if (null == $year) {

	    $year = date("Y", time());
	}

	if (null == $month && isset($_GET['month'])) {

	    $month = $_GET['month'];
	} else if (null == $month) {

	    $month = date("m", time());
	}

	$this->currentYear = $year;

	$this->currentMonth = $month;

	$this->daysInMonth = $this->_daysInMonth($month, $year);

	$content = '<div id="calendar">' .
		'<div class="box">' .
		$this->_createNavi() .
		'</div>' .
		'<div class="box-content">' .
		'<ul class="label">' . $this->_createLabels() . '</ul>';
	$content.='<div class="clear"></div>';
	$content.='<ul class="dates">';

	$weeksInMonth = $this->_weeksInMonth($month, $year);
	// Create weeks in a month
	for ($i = 0; $i < $weeksInMonth; $i++) {

	    //Create days in a week
	    for ($j = 1; $j <= 7; $j++) {
		$content.=$this->_showDay($i * 7 + $j);
	    }
	}

	$content.='</ul>';

	$content.='<div class="clear"></div>';

	$content.='</div>';

	$content.='</div>';
	return $content;
    }

    /*     * ******************* PRIVATE ********************* */

    /**
     * create the li element for ul
     */
    private function _showDay($cellNumber) {

	if ($this->currentDay == 0) {

	    $firstDayOfTheWeek = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-01'));

	    if (intval($cellNumber) == intval($firstDayOfTheWeek)) {

		$this->currentDay = 1;
	    }
	}

	if (($this->currentDay != 0) && ($this->currentDay <= $this->daysInMonth)) {

	    $this->currentDate = date('Y-m-d', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));
            $btw = $this->currentDate;
	    $cellContent = "<span class='date_text'>".$this->currentDay."</span>";

	    $this->currentDay++;
	} else {

	    $this->currentDate = null;

	    $cellContent = null;
	}
        if(isset($btw)){
	$startdate = date('Y-m-01');
	$data['student_profile'] = Students::model()->findByAttributes(array('user_id' => Yii::app()->user->id));
	$section =  InstituteBatchSectionStudent::model()->findByAttributes(array('student_id' => $data['student_profile']->id));
//        pr($section->institute_batch_section_id);
        // Last day of the month.
        $endDate = date('Y-m-t');
	$criteria = new CDbCriteria();
        $criteria->addBetweenCondition('session_date',  $btw,  $btw);
        $criteria->addCondition("institute_batch_id = ".$data['student_profile']->institute_batch_id);
        $criteria->addCondition("institute_batch_section_id = ".$section->institute_batch_section_id);
        $data['sessions'] = InstituteBatchSession::model()->find($criteria);
        
        }
        $class = " ";
	if (!empty($data['sessions'])) {
            $text = $data['sessions']->session_name."(".date("h:i a",strtotime($data['sessions']->session_date." ".$data['sessions']->session_time)).")";
	    $tt_text = $data['sessions']->session_name;
	    $cellContent = $cellContent."<span class='events'> <ul>".$tt_text."</ul></span>";
//	    pr($cellContent);
            $class = "data_active ";
	}

	return '<li class="events '.$class.'" data-toggle="tooltip" data-placement="top" title="'.$text.'"  id="li-' . $this->currentDate . '" class="'.$class . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
		($cellContent == null ? 'mask' : '') . '">' . $cellContent . '</li>';
    }

    /**
     * create navigation
     */
    private function _createNavi() {
	$this->naviHref = Yii::app()->createUrl("student/sessions");
	$nextMonth = $this->currentMonth == 12 ? 1 : intval($this->currentMonth) + 1;

	$nextYear = $this->currentMonth == 12 ? intval($this->currentYear) + 1 : $this->currentYear;

	$preMonth = $this->currentMonth == 1 ? 12 : intval($this->currentMonth) - 1;

	$preYear = $this->currentMonth == 1 ? intval($this->currentYear) - 1 : $this->currentYear;

	return
		'<div class="header">'.
                '<a class="prev" href="'.$this->naviHref.'&month='.sprintf('%02d',$preMonth).'&year='.$preYear.'">Prev</a>'.
                    '<span class="title">'.date('Y M',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
                '<a class="next" href="'.$this->naviHref.'&month='.sprintf("%02d", $nextMonth).'&year='.$nextYear.'">Next</a>'.
            '</div>';
    }

    /**
     * create calendar week labels
     */
    private function _createLabels() {

	$content = '';

	foreach ($this->dayLabels as $index => $label) {

	    $content.='<li class="' . ($label == 6 ? 'end title' : 'start title') . ' title">' . $label . '</li>';
	}

	return $content;
    }

    /**
     * calculate number of weeks in a particular month
     */
    private function _weeksInMonth($month = null, $year = null) {

	if (null == ($year)) {
	    $year = date("Y", time());
	}

	if (null == ($month)) {
	    $month = date("m", time());
	}

	// find number of days in this month
	$daysInMonths = $this->_daysInMonth($month, $year);

	$numOfweeks = ($daysInMonths % 7 == 0 ? 0 : 1) + intval($daysInMonths / 7);

	$monthEndingDay = date('N', strtotime($year . '-' . $month . '-' . $daysInMonths));

	$monthStartDay = date('N', strtotime($year . '-' . $month . '-01'));

	if ($monthEndingDay < $monthStartDay) {

	    $numOfweeks++;
	}

	return $numOfweeks;
    }

    /**
     * calculate number of days in a particular month
     */
    private function _daysInMonth($month = null, $year = null) {

	if (null == ($year))
	    $year = date("Y", time());

	if (null == ($month))
	    $month = date("m", time());

	return date('t', strtotime($year . '-' . $month . '-01'));
    }

}
?>

<section class="banner_area webinar our_bielf">
    <div class="container">
        <h2>You are always a student, never a master. You have to keep moving forward</h2>
        <span>- Conrad Hall</span>
    </div>
</section>   
<section class="industrial_portal student_webinar">	
    <div class="container">
        <div class="bread_crum">
            <ul class="list-inline list-unstyled">
                <li><a href="javascript:void(0);"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('student/portal'); ?>">MBAtrek Student</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('student/portal'); ?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li class="active"><a href="javascript:void(0);">Sessions</a></li>
            </ul>
        </div>  
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 side_bar">
<?php echo $this->renderPartial('left_menu', array("data" => $data)); ?>
            </div>
			<div class="col-md-9 col-sm-8 col-xs-12">
	    <div class="calender_block calender_Align">
		<p><em>*</em>Move the mouse over the marked block to view the details of the session.
Let me know when this is done so that I could check.</p>
<?php
$calendar = new Calendar();

echo $calendar->show()
?>
<!--		<table class="col-md-12 table-bordered table-striped table-condensed cf">
		    <thead>
			<tr>
			    <th colspan="7" class="first_year">
				<span class="year_span"><?php echo date("M, Y"); ?></span>
			    </th>
			</tr>
			<tr>
			    <th>Mon</th>
			    <th>Tue</th>
			    <th>Wed</th>
			    <th>Thu</th>
			    <th>Fri</th>
			    <th>Sat</th>
			    <th>sun</th>
			</tr>
		    </thead>
		    <tbody>
			     <tr>
				    <td class="first_year" colspan="4">
					    <span class="year_span">2016</span>
				    </td>
			    </tr> 
			<tr>
			    <td class="disable_date"><span>27</span></span></td>
			    <td class="disable_date"><span>28</span></td>
			    <td class="disable_date"><span>29</span></td>
			    <td class="disable_date"><span>30</span></td>
			    <td class="disable_date"><span>31</span></td>
			    <td><span>1</span></td>
			    <td><span>2</span></td>
			</tr>
			<tr>

			    <td><span>3</span></td>
			    <td><span>4</span></td>
			    <td><span>5</span></td>
			    <td><span>6</span></td>
			    <td><span>7</span></td>
			    <td class="event_date"> 
				<span>8</span>
				<span class="date_span">
				    Selfaware 12:00PM Room No: 101
				</span>
			    </td>
			    <td><span>9</span></td>
			</tr>
			<tr>
			    <td><span>10</span></td>
			    <td><span>11</span></td>
			    <td><span>12</span></td>
			    <td><span>13</span></td>
			    <td><span>14</span></td>
			    <td><span>15</span></td>
			    <td><span>16</span></td>
			</tr>
			<tr>
			    <td class="event_date">
				<span>17</span>
				<span class="date_span">
				    comunnication 12:00PM Room No: 101
				</span>
			    </td>
			    <td><span>18</span></td>
			    <td><span>19</span></td>
			    <td><span>20</span></td>
			    <td><span>21</span></td>
			    <td><span>22</span></td>
			    <td><span>23</span></td>

			</tr>
			<tr>
			    <td><span>24</span></td>
			    <td><span>25</span></td>
			    <td><span>26</span></td>
			    <td><span>27</span></td>
			    <td><span>28</span></td>
			    <td><span>29</span></td>
			    <td><span>30</span></td>
			</tr>
			<tr>
			    <td class="disable_date"><span>1</span></td>
			    <td class="disable_date"><span>2</span></td>
			    <td class="disable_date"><span>3</span></td>
			    <td class="disable_date"><span>4</span></td>
			    <td class="disable_date"><span>5</span></td>
			    <td class="disable_date"><span>6</span></td>
			    <td class="disable_date"><span>7</span></td>
			</tr>
		    </tbody>
		</table>-->
	    </div>
		</div>
        </div>
    </div>
</section>

<style>
    /*******************************Calendar Top Navigation*********************************/
    div#calendar{
	margin:0px auto;
	padding:0px;
	width: 602px;
	font-family:Helvetica, "Times New Roman", Times, serif;
    }

    div#calendar div.box{
	position:relative;
	top:0px;
	left:0px;
	width:100%;
	height:40px;
	background-color:  #569145 ;      
    }

    div#calendar div.header{
	line-height:40px;  
	vertical-align:middle;
	position:absolute;
	left:11px;
	top:0px;
	width:97%;
	height:40px;   
	text-align:center;
    }

    div#calendar div.header a.prev,div#calendar div.header a.next{ 
	position:absolute;
	top:0px;   
	height: 17px;
	display:block;
	cursor:pointer;
	text-decoration:none;
	color:#FFF;
    }

    div#calendar div.header span.title{
	color:#FFF;
	font-size:18px;
    }


    div#calendar div.header a.prev{
	left:0px;
    }

    div#calendar div.header a.next{
	right:0px;
    }




    /*******************************Calendar Content Cells*********************************/
    div#calendar div.box-content{
	border:1px solid #787878 ;
	border-top:none;
    }



    div#calendar ul.label{
	float:left;
	margin: 0px;
	padding: 0px;
	margin-top:5px;
	margin-left: 5px;
    }

    div#calendar ul.label li{
	margin:0px;
	padding:0px;
	margin-right:5px;  
	float:left;
	list-style-type:none;
	width:115px;
	height:40px;
	line-height:40px;
	vertical-align:middle;
	text-align:center;
	color:#000;
	font-size: 15px;
	background-color: transparent;
    }


    .calender_block.calender_Align #calendar  ul.dates{
	float:left;
	margin:0 0 0 7px!important;
	padding: 0px;
	margin-left: 5px;
	margin-bottom: 5px;
    }

    /** overall width = width+padding-right**/
    div#calendar ul.dates li{
	margin:0px;
	padding:0px;
	margin-right:5px;
	margin-top: 5px;
	line-height:80px;
	vertical-align:middle;
	float:left;
	list-style-type:none;
	width:114px;
	height:80px;
	font-size:25px;
	background-color: #DDD;
	color:#000;
	text-align:center; 
    }

    :focus{
	outline:none;
    }

    div.clear{
	clear:both;
    }  
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    
});
</script>