<?php 
session_start();
$hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT * FROM buyer WHERE id = ".$_SESSION['ID2']."";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Savvy Kalakar</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
</head>

<body>
		<form action="buy1.php" method="post" enctype="multipart/form-data">

	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>  
    <div class="container" style="background-color:#000;padding-bottom:10px;border:3px dotted #FFFFFF;">
  	 <div class="row" style="margin-top:10px;">
		<input type="submit" name="commit1" value="Logout" class="btn btn-danger col-md-1 col-md-offset-10" />
         </div>
    </div>
    <h2 class = "col-md-4 col-md-offset-8">Welcome <?php echo $row['buyer_name']; ?></h2>
    <?php 
if(isset($_POST['commit1'])){
	session_unset();
	session_destroy();
	echo "<script>window.location.href='../index.php'</script>";
}

?>
	

.
<div class="media">
        <div class="media-left" >
            <a href="#">
            
                <img style="margin-left:20px;float:left;" class="media-object" src="<?php echo "../images/".$row['buyerimg']; ?>" width="350" height="300">
				
				</a>
             
        </div>
		<div class="media-right ">
            <input type = "submit" name = "placebid" class = "btn btn-success " value = "Place a Bid" style="margin-left:500px;margin-top:100px;width:143px"><br><br>
            <input type = "submit" name = "viewbid" class = "btn btn-danger " value = "View Previous Bids" style="margin-left:500px;">
        </div>
		 
		 <?php 
if(isset($_POST['placebid'])){
	echo "<script type='text/javascript'>window.location.href = 'view.php'</script>";
}
?>
 </div>
</form> 
</body>
</html>