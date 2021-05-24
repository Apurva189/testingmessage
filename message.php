<?php

session_start();
//$p=$_SESSION[""];
echo "<script type='text/javascript'>alert('succes');</script>";
$request =""; //initialise the request variable
$param[method]= "sendMessage";
$param[send_to] = "6353581998";
$param[msg] = "YOUR APPLICATION FOR MANAGEMENT/NRI/NRI SPONSORED 2020 HAS BEEN SUCCESFULLY SUBMITTED AT SVIT VASAD";
$param[userid] = "2000098782";
$param[password] = "Svit$321";
$param[v] = "1.1";
$param[msg_type] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
$param[auth_scheme] = "PLAIN";
//Have to URL encode the values
foreach($param as $key=>$val) {
$request.= $key."=".urlencode($val);
//we have to urlencode the values
$request.= "&";
//append the ampersand (&) sign after each parameter/value pair
}
$request = substr($request, 0, strlen($request)-1);
//remove final (&) sign from the request
$url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
//echo $curl_scraped_page;

header("Location: login.php");  
//echo '<script> alert("success")</script>'      
			    die;
?>