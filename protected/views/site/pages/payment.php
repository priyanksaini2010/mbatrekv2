<?php
$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$userDetails = Users::model()->findByPk($params);
switch($userDetails->subscription){
    case 2:
        $paramList["TXN_AMOUNT"] = 500;
        break;
    case 3:
        $paramList["TXN_AMOUNT"] = 1000;
        break;
    case 4:
        $paramList["TXN_AMOUNT"] = 1500;
        break;
}

// Create an array having all required parameters for creating checksum.
$orderModel =  new SubscriptionPayment();
$orderModel->attributes = array(
            "order_id" =>"MBTORDSSTAGE".$userDetails->id."-".rand(10000,99999999),
            "user_id" =>$userDetails->id,
            'amount' => $paramList["TXN_AMOUNT"],
            'subscription' => $userDetails->subscription,
            'status' => 0,
            'tx_date' => date("Y-m-d h:i:s"),
        );



if(!$orderModel->save()) {
    pr($orderModel->getErrors());
}
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $orderModel->order_id;
$paramList["CUST_ID"] = "MBATREKTEST".$userDetails->id;
$paramList["INDUSTRY_TYPE_ID"] = "Retail";
$paramList["CHANNEL_ID"] = "WEB";
$paramList["CALLBACK_URL"] = PAYTM_CALLBACK_URL;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["MSISDN"] = $userDetails->phone_number; //Mobile number of customer
$paramList["EMAIL"] = $userDetails->email; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

/*
$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>