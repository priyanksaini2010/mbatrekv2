<?php
$paramList["key"] = Yii::app()->params['payu_merchant_id'];
$paramList["salt"] = Yii::app()->params['payu_salt'];
$paramList["txnid"] = $params['transaction_id'];
$paramList["amount"] = $params['amount'];
$paramList["productinfo"] = $params['product_info'];
$paramList["firstname"] = $params['name'];
$paramList["email"] = $params['email'];
$paramList["phone"] = $params['mobile'];
$paramList["hash"] = $params['hash'];
$paramList["surl"] = $params['surl'];
$paramList["furl"] = $params['surl'];
$paramList["curl"] = $params['surl'];
$paramList["udf5"] = $params['udf5'];
$paramList["service_provider"] = 'payu_paisa';
?>

<html>
<head>
    <title>Merchant Check Out Page</title>
</head>
<body>
<center><h1>Please do not refresh this page...</h1></center>
<form method="post" action="<?php echo Yii::app()->params['payu_test_url']; ?>" name="f1">
    <table border="1">
        <tbody>
        <?php
        foreach($paramList as $name => $value) {
            echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
        }
        ?>
        </tbody>
    </table>
    <script type="text/javascript">
        document.f1.submit();
    </script>
</form>
</body>
</html>
