<?php
//Here checksum string will return by getChecksumFromArray() function.
$paytmChecksum = getChecksumFromArray($paytmParams, "pDK9@IhUa!ug0Eb8");
$transactionURL = 'https://securegw.paytm.in/theia/processTransaction';
?>
<html>
<head>
    <title>Merchant Checkout Page</title>
</head>
<body>
<center><h1>Please do not refresh this page...</h1></center>
<form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
    <?php
    foreach($paytmParams as $name => $value) {
        echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
    }
    ?>
    <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
</form>
<script type="text/javascript">
    document.f1.submit();
</script>
</body>