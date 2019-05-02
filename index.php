<?php
// Ia m comment
// I am also:wq
$env = "PROD";
global $payuSurl;
if($env == "LOCAL"){
    error_reporting(E_ERROR);
    $payuSurl = "https://localhost/mbt/cart/payusurl";
    $link = mysqli_connect("localhost","root","","mbatrek_v2");
} else {
    error_reporting(0);
    $payuSurl =  "https://mbatrek.com/cart/payusurl";
    $link = mysqli_connect("localhost","mbatrek_admin","mbatrek_admin","mbatrek_v2");
}

$SQL = "select id from  blogs";
$SQLPRODS = "select id,title from  products";
$rs = mysqli_query($link,$SQL) ;
$rsprods = mysqli_query($link,$SQLPRODS) ;

global $blogUrlsForRules;
global $productsUrlsForRules;

$blogUrlsForRules = array();
if(mysqli_num_rows($rs) > 0){

    while($row = mysqli_fetch_assoc($rs)){
        $blogUrlsForRules["blogs/".$row['id']] = "site/blogdetails/id/".$row['id'];
    }

}
if(mysqli_num_rows($rsprods) > 0){

    while($rows = mysqli_fetch_assoc($rsprods)){
        $url = str_replace("#","",rtrim($rows['title']));
        $url = str_replace(" ","-",$url);
        $url = strtolower($url);
        $productsUrlsForRules[$url] = "cart/description/id/".$rows['id'];
    }

}
mysqli_close($link);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

date_default_timezone_set("Asia/Kolkata");
//const BLOGURLS = $blogUrls;
const DIREC = "/";
const BACK_COLOR = 0xFFFFFF;
require_once 'payment_lib/PaytmKit/lib/config_paytm.php';
require_once 'payment_lib/PaytmKit/lib/encdec_paytm.php';
require_once 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
//require_once ('linkedinwp/oauth/linkedinoauth.php');
function money($number){
    return number_format($number, 0, '.', ',');
}
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

    $to = $email; // <– replace with your address here
    $message = $body;
    if(mail($to,$subject,$message,$headers)){
        logEmails($email,$subject, 1);
    } else{
        logEmails($email,$subject, 2);
    }

//    $mail = new PHPMailer(true);
//    try{
//        $mail = new PHPMailer(); // create a new object
//        $mail->IsSMTP(); // enable SMTP
////        $mail->SMTPDebug = 3; // debugging: 1 = errors and messages, 2 = messages only
//        $mail->SMTPAuth = true; // authentication enabled
//        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
//        $mail->Host = "ssl://smtp.gmail.com";
//        $mail->Port = 465; // or 587
//        $mail->IsHTML(true);
//        $mail->Username = "workspace.priyank.saini@gmail.com";
//        $mail->Password = "#qw123pop";
//        $mail->SetFrom("workspace.priyank.saini@gmail.com");
//        $mail->addAddress($email);
//        $mail->isHTML(true);
//        $mail->Subject = $subject;
//        $mail->Body    = $body;
//        $mail->send();
//        logEmails($email,$subject, 1);
//
//    }catch (Exception $e) {
//        logEmails($email,$subject, 2);
//    }
}
function logEmails($email,$subject, $status){
    if($status == 1){
        $line = "Mail Sent To : ".$email." Subject : ".$subject;
        if (filesize(getcwd().'/email.log') > 3000000 ) {
            rename(getcwd().'/email.log', getcwd().'/logs/visitors-'.date("Y-m-d")."-".time().'.log');
        }
        file_put_contents('logs/email.log', $line . PHP_EOL, FILE_APPEND);
    } else{
        $line = "Failed Email : ".$email." Subject : ".$subject;
        if (filesize(getcwd().'/email.log') > 3000000 ) {
            rename(getcwd().'/email.log', getcwd().'/logs/email-'.date("Y-m-d")."-".time().'.log');
        }
        file_put_contents('logs/email.log', $line . PHP_EOL, FILE_APPEND);
    }


}
//$headers = "From: no-reply@mbatrek.com" . "\r\n" .
////"CC: workspace.priyank.saini@gmail.com";
//pr(sendEmail("priyanksaini2010@gmail.com","Hi There","Hello Ji",$headers));
function getYoutubeFeeds(){
    $API_key    = 'AIzaSyCDd12p2lLnFqBmx2bpXEg03h3_70LmLs4';
    $channelID  = 'UCJg7bO36Hii_AXTDL6TLY4A';
    $maxResults = 10;
    $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
    return $videoList;
}
function getInstaFeeds(){
    $accees_token = "4513557893.af13baa.e53757748fe142809cb2ea408c44bd80";
//$client_id = "af13baa72a464546983963921e964930";
//$url = "https://api.instagram.com/oauth/authorize/?client_id=".$client_id."&redirect_uri=".urlencode("https://localhost/v3/callback.php")."&response_type=code&scope=public_content";
////
//    pr($url);

    $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$accees_token;    
//    $headers = array(
//      'Authorization: Bearer ' . $token,
//      'x-li-format: json'
//    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = (array)json_decode($response);
//    pr($data);
    return $data;
}
//pr(getInstaFeeds());
function getLinkedInFeeds(){
//    $token = generateRandomString(10);
////    $code = "AQS56H56i6WHKP8a_f4U0cDz1k0kKpmD7r-oGcaC1IaTyA7enWZ8TBOvp9nmBOqnjT6cJPK5aMeITBGaj_H_mcRJqWGv6Opg2nQvJ8_w9ItW45zeA2-YQxCic8MGjeXEDcVVTh5XUaKzpiBSbOoElOmBKpbqz9PLONMK0tIDzi5GeFUkQTrsLp3lJ07DjA";
//    $url = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=819f0m0m8h76le";
//    $url .= "&redirect_uri=".urlencode("https://localhost/mbt/callback.php");
//    $url .= "&state=".$token."&scope=rw_company_admin";
//    pr($url);

    $token = "AQUjKvfovP8t_xCxYTgVb0ZDh48o51kYJQBiCDKGFj4QOyftlHAZiNqBN4ke8iPRSvHxDJoiWtepp6m34K8EdG-HvT6E94vOEOu4P9PB28AnZwYt6cwl-u_W10M0oZhvzN6SvUEHuZp2XdN9qBc2JhfkDy2fX8YchkRZwCZgEvIsfeJI4NyPzFql_J6ZePsgTdK1mlf8qqR3avJa5SOTKGqd-6Ag6mki-aqnRpx8wbR8a7_TNEYOMOr5vWmbLdUMjJmMtRnUg078olfcQTCBpGELZelNT1CcHkwhuR08Pl7bt8XffCC7ufWgMkB_4pirn9fAjwQ2N3YtqhCFqk2TLfdOdq2kMA";
    $url = "https://api.linkedin.com/v1/companies/7955944/updates";    
    $headers = array(
      'Authorization: Bearer ' . $token,
      'x-li-format: json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = (array)json_decode($response);
//    pr($data);
    return $data;

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
    }else if($type == "verify"){
        $content = file_get_contents('template_images/varify_accound.html');
    } else if($type == "order_success"){
        $content = file_get_contents('template_images/order_success.html');
    } else if($type == "order_failure"){
        $content = file_get_contents('template_images/order_fail.html');
    }  else if($type == "ca"){
        $content = file_get_contents('template_images/compus_amastor.html');
    }
    else {
	 $content = file_get_contents('template_images/'.$type.".html");
    }
    return $content;
}
function verifyCaptcha($response) {
    $postdata = http_build_query(
        array(
            'secret'   => '6LcHG6EUAAAAAOPcr1CT0Q3MUUZur3j1faKpbOz3',
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        )
    );
    $options = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    $context = stream_context_create($options);
    $result  = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context));

    //check if 'success' is ture, 'action' is the same as the one specified in your form and 'score' is greater than 0.5
    if($result->success){
        return true;
    }
    return false;
}
/*$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
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
} */
//getInstaFeeds();
/*$line = date('Y-m-d H:i:s') . " | ".$_SERVER['REMOTE_ADDR']." | ".$country." | ".$city." | ".$region." | ".$lat." | ".$long." | ".$_SERVER['HTTP_USER_AGENT'] ." | ".$_SERVER['REQUEST_URI'] ."\n";
if (filesize(getcwd().'/visitors.log') > 3000000 ) {
   rename(getcwd().'/visitors.log', getcwd().'/logs/visitors-'.date("Y-m-d")."-".time().'.log'); 
}
file_put_contents('logs/visitors.log', $line . PHP_EOL, FILE_APPEND);    */
// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
