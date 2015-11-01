<?php

//RECEIVING MESSAGE AND EXTRACTING IT FROM GET

$SmsSid = $_GET["SmsSid"];
$From = $_GET["From"];
$To = $_GET['To'];
$Date = $_GET['Date'];
$Body = $_GET['Body'];

session_start();
$buyer_phone_no = $_SESSION["buyer_phone_no"];
$buyer_name = $_SESSION["buyer_name"];
$_SESSION["buyer_address"] = $buyer_address;

$Type = substr($Body, 0, 3);

if(strcasecmp($Type, 'ADR') == 0)
{
	$buyer_address = substr($Body, 4);

	$servername = "localhost";
	$username = "nitsurat_admin";
	$password = "shitHAPPENS!!";
	$dbname = "nitsurat_ctfdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "UPDATE order_info SET buyer_address = '$buyer_address', confirmation_status  = TRUE WHERE buyer_phone_no = '$buyer_phone_no';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if (mysql_num_rows($result)==0)
	{
		$new_sql = "SELECT order_id FROM order_info WHERE buyer_phone_no = '$buyer_phone_no';";
		$new_result = mysqli_query($conn, $new_sql);
		$row = mysqli_fetch_array($new_result);
		$order_id = $row['order_id'];
		
		$post_data = array(
			// 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
			// For promotional, this will be ignored by the SMS gateway
			'From'   => '8690698655',
			'To'    => $buyer_phone_no,
			'Body'  => 'Hi '. $buyer_name .'. Your order with ID ' . $order_id . ' has been successfully confirmed. It will be shipped and delivered soon.', 
		);
		 
	}
}

else if(strcasecmp($Type, "AMT") == 0)
{
	$off_bid_amount = substr($Body, 4);
	$servername = "localhost";
	$username = "nitsurat_admin";
	$password = "shitHAPPENS!!";
	$dbname = "nitsurat_ctfdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "UPDATE bid_offline SET off_bid_amount = '$off_bid_amount' WHERE off_phone_no = '$From';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

		
	$post_data = array(
		// 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
		// For promotional, this will be ignored by the SMS gateway
		'From'   => '8690698655',
		'To'    => $buyer_phone_no,
		'Body'  => 'Hi '. $buyer_name .'. Your bid was successful.', 
	);
		 
}

$exotel_sid = "theofflinestore"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "32c9a9676eb43d110b5f5ce92a1d74e69e3fb7d3"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);

?>