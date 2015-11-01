<?php 
session_start();
$var = $_SESSION['ID2'];
$img_id=$_GET["v"];
?>
<!DOCTYPE HTML>

<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<title>
</title>
</head>
<body>
<form action="viewfinal.php?v=<?php echo $img_id; ?>" method="post" enctype="multipart/form-data">


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="hack";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT * FROM images where img_id=".$img_id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$maruphoto="../images/".$row["imgpath"];

?>

<table id="userInfo" width="60%" style="margin-top:50px;"  cellspacing="20" cellpadding="20" align="left">
  	<tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong></strong></th>
      
    </tr>
  
   <tr style="margin-top:20px;">
      <td width="30%" id="heads"><strong>Title:</strong></td>
      <td width="70%" id="detail">
       	<?php echo $row['img_title']; ?></td>
    </tr>
  <tr>
      <td width="30%" id="heads"><strong>Description:</strong></td>
      <td width="70%" id="detail">
       <?php echo $row['img_desc']; ?></td>
    </tr>
  <tr>
      <td width="30%" id="heads"><strong>Current Product-Rating:</strong></td>
      <td width="70%" id="detail">
       <?php echo "2"; ?></td>
    </tr>
   <tr>
      <td width="30%" id="heads"><strong>Highest Bid:</strong></td>
	  <td width="70%" id="detail"></td>
     </tr>
	 <tr>
      <td width="30%" id="heads"><strong>Place Bid:</strong></td>
	  <td width="70%" id="detail"><input type="text" name="bidvalue">
      </td>
     </tr>
<tr>
<td width="30%" id="heads"><strong>Place Bid:</strong></td>
<td width="70%" id="detail"><input  style="margin-top:20px;" type="submit" name="placebid1" value="PLACE BID" class="btn btn-danger">
</tr>

</table>

<img id="userPhoto" style="margin-top:50px;" src="<?php echo $maruphoto; ?>" width="300" height="200"/>

<hr>

<?php


if(isset($_POST['placebid1'])){
  $sql2 = "INSERT INTO `bid`(`buyer_id`, `img_id`, `bid_amount`) VALUES ('".$var."','".$img_id."','".$_POST['bidvalue']."')";
  $result2 = mysqli_query($conn, $sql2);
  mysqli_close($conn);
  echo "<script>window.location.href='view.php'</script>";
}


?>
</form>
</body>


</html>