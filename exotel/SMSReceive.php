<?php

//RECEIVING MESSAGE AND EXTRACTING IT FROM GET

$SmsSid = $_GET["SmsSid"];
$From = $_GET["From"];
$To = $_GET['To'];
$Date = $_GET['Date'];
$Body = $_GET['Body'];

$Type = substr($Body, 0, 3);
$ProductId = substr($Body, 4, 10);
$buyer_name = substr($Body, 14);
session_start();
$_SESSION["buyer_phone_no"] = $From;
$_SESSION["buyer_name"] = $buyer_name;


if(strcasecmp($Type, 'BUY') == 0)
{
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

	$sql = "SELECT product_title FROM product_info WHERE product_id='$ProductId';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if (mysql_num_rows($result)==0)
	{
		//echo $SmsSid . '   ' . $From . '     ' . $Body . '   ' . $Date;
		$curr_product_title = $row['product_title'];
		
		$new_sql = "INSERT INTO order_info VALUES('NULL', '$ProductId', '$From', '', '$buyer_name', '$Date', '', FALSE);";
		$new_result = mysqli_query($conn, $new_sql);
		$row = mysqli_fetch_array($new_result);
		
		header("Content-Type: text/plain");
		
		$post_data = array(
			// 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
			// For promotional, this will be ignored by the SMS gateway
			'From'   => '8690698655',
			'To'    => $From,
			'Body'  => 'Hi ' . $buyer_name . ' Your order request for ' . $curr_product_title . ' has been received. Now, send us your full address for delivery', 
		);
	}
}

else if(strcasecmp($Type, 'CAN') == 0)
{
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

	
	$sql = "DELETE FROM order_info WHERE product_id='$ProductId' AND buyer_phone_no = '$From';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if (mysql_num_rows($result)==0)
	{
		header("Content-Type: text/plain");
		
		$post_data = array(
			// 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
			// For promotional, this will be ignored by the SMS gateway
			'From'   => '8690698655',
			'To'    => $From,
			'Body'  => 'Hi ' . $buyer_name . ' Your order has been successfully cancelled.', 
		);
	}
}

else if(strcasecmp($Type, 'BID') == 0)
{
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

	
	$sql = "INSERT INTO bid_offline VALUES ('NULL', '$buyer_name', '$ProductId', '') WHERE product_id = '$ProductId';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	header("Content-Type: text/plain");
	
	$post_data = array(
		// 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
		// For promotional, this will be ignored by the SMS gateway
		'From'   => '8690698655',
		'To'    => $From,
		'Body'  => 'Hi ' . $buyer_name . ' Your bid request for Product ID ' . $ProductId . ' has been received. Please reply with AMT <amount> in rupees.', 
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