<?php
error_reporting(E_ERROR);
require_once 'payment_lib/PaytmKit/lib/config_paytm.php';
require_once 'payment_lib/PaytmKit/lib/encdec_paytm.php';
function productsMenu($id){
    return array(
	array('label'=>'Products Details','url'=>array('products/view',"id"=>$id)),
	array('label'=>'Manage Product\'s : Key Points','url'=>array('productKeyPoints/admin',"product_id"=>$id)),
	array('label'=>'Manage Product\'s : Includes','url'=>array('productInclude/admin',"product_id"=>$id)),
	array('label'=>'Manage Product\'s : How do we engage with you','url'=>array('productEngage/admin',"product_id"=>$id)),
	array('label'=>'Manage Product\'s : Key Out comes','url'=>array('productKeyOutcome/admin',"product_id"=>$id)),
	array('label'=>'Manage Product\'s : Recommended Value Saver Packages','url'=>array('productRecommendedValueSaverPack/admin',"product_id"=>$id)),
	);
}
function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtolower ($word[0]);
    if(strlen($ret) == 1) {
	$ret = $str;
    }
    return $ret;
}

function sendEmail( $email,$subject,$body,$headers )
{
    
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://b4bsourcing.com/sendmail.php',
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => array(
	    'email' => $email,
	    'subject' => $subject,
	    'body' => $body,
	    'headers' => $headers,
	)
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    
    // Close request to clear up some resources
    curl_close($curl);
//    pr($body);
}
function array_2_csv($array) {
    $csv = array();
    foreach ($array as $item) {
        if (is_array($item)) {
            $csv[] = array_2_csv($item);
        } else {
            $csv[] = $item;
        }
    }
    return implode(',', $csv);
} 
/** 
 * create time range by CodexWorld
 *  
 * @param mixed $start start time, e.g., 7:30am or 7:30 
 * @param mixed $end   end time, e.g., 8:30pm or 20:30 
 * @param string $interval time intervals, 1 hour, 1 mins, 1 secs, etc.
 * @param string $format time format, e.g., 12 or 24
 */ 
function create_time_range($start, $end, $interval = '30 mins', $format = '24') {
    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $returnTimeFormat = ($format == '12')?'g:i:s A':'G:i:s';

    $current   = time(); 
    $addTime   = strtotime('+'.$interval, $current); 
    $diff      = $addTime - $current;

    $times = array(); 
    while ($startTime < $endTime) { 
        $times[date($returnTimeFormat, $startTime)] = date($returnTimeFormat, $startTime); 
        $startTime += $diff; 
    } 
    $times[date($returnTimeFormat, $startTime)] = date($returnTimeFormat, $startTime); 
    return $times; 
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function downloadFile($path,$name){
    $filename =  $path; // don't accept other directories
    $mime = ($mime = getimagesize($filename)) ? $mime['mime'] : $mime;
    $size = filesize($filename);
    $fp   = fopen($filename, "rb");
    if (!($mime && $size && $fp)) {
      // Error.
//              return;
    }
    $basename = basename($name);
    header("Content-type: " . $mime);
    header("Content-Length: " . $size);
    // NOTE: Possible header injection via $basename
    header("Content-Disposition: attachment; filename=" . $basename);
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    fpassthru($fp);
    flush();
}
function getMenu(){
    $menu=array(
            array('label'=>'Industries Details','url'=>array('industries/view',"id"=>$_GET['industry_id'])),
            array('label'=>'Assotiates Users','url'=>array('industryUser/admin',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Add User','url'=>array('industryUser/create',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Job Postings','url'=>array('JobPosting/admin',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Internships','url'=>array('industryInternship/admin',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Projects With Faculty','url'=>array('industryProjectWithFaculty/admin',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Live Projects','url'=>array('liveProjects/admin',"industry_id"=>$_GET['industry_id'])),
            array('label'=>'Session At Campus','url'=>array('industrySession/admin',"industry_id"=>$_GET['industry_id'])),
    );

    return $menu;
}
function getLayot(){
    return 'webroot.themes.bootstrap.views.layouts.main';
}

function getCartLayot(){
    return 'webroot.themes.cart.views.layouts.main';
}
function pr($data, $kill = true){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($kill) {
       die; 
    }
}

function get_weekdays ($from, $to=false) {
    if ($to == false)
        $to = last_day_of_month($from);

    $days = array();

    for ($x = $from; $x < $to; $x+=86400 ) {
        if (date('w', $x) > 0 && date('w', $x) < 6)
            $days[] = date("Y-m-d",$x);
    }
    return $days;       
}

function last_day_of_month($ts=false) {
    $m = date('m', $ts);
    $y = date('y', $ts);
    return mktime(23, 59, 59, ($m+1), 0, $y);
}

/**
 * trims text to a space then adds ellipses if desired
 * @param string $input text to trim
 * @param int $length in characters to trim to
 * @param bool $ellipses if ellipses (...) are to be added
 * @param bool $strip_html if html tags are to be stripped
 * @return string 
 */
function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }

    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }

    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);

    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }

    return $trimmed_text;
}
function getCities() {
    $list = array();
    $file = fopen('assets/city_db/Cities_List.csv', 'r');

    while (($result = fgetcsv($file)) !== false)
    {
	$list[] = $result;
    }

    fclose($file);
  
    $all = array();
    foreach ($list as $key => $valuelst) {

        foreach ($valuelst as $keyc => $cts) {
            $all[] = $cts;
        }
    }
    return $all;
}

function getTemplate($type){
    $content = "";
    if($type == "student") {
	$content = file_get_contents('template_images/student.html');
    } elseif($type == "forget") {
	$content = file_get_contents('template_images/forget.html');
    }	elseif($type == "student_admin") {
	$content = file_get_contents('template_images/student_admin.html');
    }elseif($type == "institute_admin") {
	$content = file_get_contents('template_images/institute_admin.html');
    } else if($type == "register"){
        $content = file_get_contents('template_images/register.html');
    }
    else {
	$content = file_get_contents('template_images/institute.html');
    }
    return $content;
}

$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
$country = "";
$city = "";
$region = "";
$lat = "";
$long = "";

if ($location != "") {
    $location = json_decode($location);
   $country = $location->country_name;
    $city = $location->city;
    $region = $location->region_name;	
    $lat = $location->latitude;
    $long = $location->longitude;
} 

$line = date('Y-m-d H:i:s') . " | ".$_SERVER['REMOTE_ADDR']." | ".$country." | ".$city." | ".$region." | ".$lat." | ".$long." | ".$_SERVER['HTTP_USER_AGENT'] ." | ".$_SERVER['REQUEST_URI'] ."\n";
if (filesize(getcwd().'/visitors.log') > 3000000 ) {
   rename(getcwd().'/visitors.log', getcwd().'/logs/visitors-'.date("Y-m-d")."-".time().'.log'); 
}
file_put_contents('logs/visitors.log', $line . PHP_EOL, FILE_APPEND);    
// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
