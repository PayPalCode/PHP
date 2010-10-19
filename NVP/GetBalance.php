<?php

//Set to which API Call you wish to make
$ApiCall = 'GetBalance';

//CallerService.php is required file out of the SDK to 
require_once 'C:\xampp\htdocs\paypal\nvp\CallerService.php'; 
$resArray=hash_call("$ApiCall",$request);

//Data that is needed to Build Request String
$API_UserName = "mtspay_1284575992_biz_api1.hotmail.com";
$API_Password = "AUTTGF628Q3QA78H";
$API_Signature = "AoB5IIgQBTtFGERB4hWpnN2n.6B8ASc7I8FoZTaBGuGDiYIVnxa1jArj";
$nvpHeader = "&PWD=".urlencode($API_Password)."&USER=".urlencode($API_UserName)."&SIGNATURE=".urlencode($API_Signature)."&";
$request = $nvpHeader."METHOD=$ApiCall";

//Sending GetBalance Request
$resArray=hash_call("$ApiCall",$request);

//////////////////////////
//Start of Non-SDK Code//
/////////////////////////
//Request String Passed
echo "<b>Request:</b><br>".$request;
echo "<br><br>";

//Resposne String Returned
echo "<b>Response:</b><br>";
print_r($resArray);
echo "<br>";
echo "<br>";

echo "<b>Description of the values returned in the response:</b><br>";
//How to Parse
echo "Returns the PayPal balance in your account.";
echo "<br>L_AMT0= ".$ack = strtoupper($resArray["L_AMT0"]);
echo "<br><br>Returns the Curreny Code your balance is in. ";
echo "<br>L_CURRENCYCODE0= ".$ack = strtoupper($resArray["L_CURRENCYCODE0"]);
echo "<br><br>Returns the Time Stamp of when the API call was processed.";
echo "<br>TIMESTAMP= ".$ack = strtoupper($resArray["TIMESTAMP"]);
echo "<br><br>Returns the corrleation id which is a distinct value used by our Merchant Tech Support to trouble shoot API Calls.";
echo "<br>CORRELATIONID= ".$ack = strtoupper($resArray["CORRELATIONID"]);
echo "<br><br>Returns the status of the API. ";
echo "<br>ACK= ".$ack = strtoupper($resArray["ACK"]);
echo "<br><br>Returns the version of the API call.";
echo "<br>VERSION= ".$ack = strtoupper($resArray["VERSION"]);
echo "<br><br>Returns the version/build of the backend code that processed the API call.";
echo "<br>BUILD= ".$ack = strtoupper($resArray["BUILD"]);
?>