<?php session_start(); ?>
<html>
<head>
<title> </title>

</head>
<body>
<!-- Menu -->
<h1>Enrollment Response:</h1><br><br>
<?php

$TransactionID = $_GET['TransactionID'];

//var_dump($_POST);

$PLAN_SUBSCRIBED = $_POST['PLAN_SUBSCRIBED'];

if ($PLAN_SUBSCRIBED == "myhealthpass"){
$PAYMENT_AMOUNT = 24.95;
$PRODUCT_CODE = 12697;
} else {
$PAYMENT_AMOUNT = 14.95;
$PRODUCT_CODE = 12873;
}

$url = 'https://www.enrollment123.com/gateway/member.cfm';

$fields = array(
'CORP_ID'=>urlencode("1114"),
'AGENT_ID'=>urlencode("159632"),
'UNIQUE_ID'=>urlencode($_POST['UNIQUE_ID']),
'PRODUCT_CODE'=>urlencode($PRODUCT_CODE),
'PRODUCT_SUBCODE'=>urlencode($PRODUCT_SUBCODE),
'PAYMENT_PROCESS'=>urlencode($_POST['PAYMENT_PROCESS']),
'PAYMENT_TYPE'=>urlencode($_POST['PAYMENT_TYPE']),
'PAYMENT_AMOUNT'=>urlencode($PAYMENT_AMOUNT),
'FIRST_NAME'=>urlencode($_POST['FIRST_NAME']),
'LAST_NAME'=>urlencode($_POST['LAST_NAME']),
'ADDRESS_1'=>urlencode($_POST['ADDRESS_1']),
'CITY'=>urlencode($_POST['CITY']),
'STATE'=>urlencode($_POST['STATE']),
'ZIP_CODE'=>urlencode($_POST['ZIP_CODE']),
'COUNTRY'=>urlencode($_POST['COUNTRY']),
'DAYPHONE'=>urlencode($_POST['DAYPHONE']),
'EMAIL'=>urlencode($_POST['EMAIL']),
'CC_TYPE'=>urlencode($_POST['CC_TYPE']),
'CC_NUMBER'=>urlencode($_POST['CC_NUMBER']),
'CC_EXP_MONTH'=>urlencode($_POST['CC_EXP_MONTH']),
'CC_EXP_YEAR'=>urlencode($_POST['CC_EXP_YEAR']),
'CC_CVV2'=>urlencode($_POST['CC_CVV2']),
'USERNAME'=>urlencode($_POST['USERNAME']),
'PASSWORD'=>urlencode($_POST['PASSWORD']),
'submit' => 'submit',
'submitted' => 'submitted'
 );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');
//print "$fields_string";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
$result = curl_exec($ch);
print_r($result);
curl_close($ch);

//echo $result;
$tempInput = split("\|",$result); //note \ is because the "|" symbol is an operator in PHP.

$response_code = $tempInput[0];
$response_description = $tempInput[1];

if ($response_code == 1){
list($s_status, $s_member_id, $s_message, $s_product_code, $s_transaction_id) = explode("|", $result);
//echo 's:'. $s_message;
//Successful
$DidItProcess = "Y";
$TransactionID = $TransactionID + 1;

} else {
list($f_status, $f_product_code, $f_message, $f_transaction_id) = explode("|", $result);
//echo 'f:'. $f_message;
//UnSuccessful
$DidItProcess = "N";

}
?>


   <!-- Saved as a note -->
  <div align=left>

    <?php
	if ($DidItProcess == "Y"){
    ?>
    <p><font color=#000> </font><B>Success! Your transaction has been processed.<br><br>
    this where the text goes.
    <br><br>
    </p>
    <?
	} else {
	?>
    <p><font color="red"><B>Transaction Failed.<br>
    Message: <?php global $f_message;
    echo $f_message; ?> <br>
    Use the "BACK" button in your web browser to return to the previous page and verify that the information entered is correct.<br><br></font>
    </p>
  	<?php
	}
	?>
  </div>


</body>
</html>