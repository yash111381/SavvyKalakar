<?php 
session_start();
$hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT * FROM login WHERE ID = ".$_SESSION['ID']."";
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
		<form action="artist.php" method="post" enctype="multipart/form-data">

	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>  
    <div class="container" style="background-color:#000;padding-bottom:10px;border:3px dotted #FFFFFF;">
  	 <div class="row" style="margin-top:10px;">
		<input type="submit" name="commit1" value="Logout" class="btn btn-danger col-md-1 col-md-offset-10" />
         </div>
    </div>
    <h2 class = "col-md-4 col-md-offset-8">Welcome <?php echo $row['user_name']; ?></h2>
    <?php 
if(isset($_POST['commit1'])){
	session_unset();
	session_destroy();
	echo "<script>window.location.href='../index.php'</script>";
}
$uname=$row["user_name"];
$ucontact=$row["contact_no"];
$desc=$row["description"];
$imgpath=$row["impath"];

?>
	

.
<div class="media">
        <div class="media-left" >
            <a href="#">
            
                <img style="margin-left:20px;float:left;" class="media-object" src="<?php echo "../images/".$imgpath; ?>" width="350" height="300">
				
				</a>
             
        </div>
        <div class="media-body" >
            <h3 class="media-heading"style="margin-top:30px"><u>Your Description</u></h3>
             <p><?php echo $desc; ?></p>
			 <h3 class="media-heading"style="margin-top:150px"><u>Contact Number</u></h3>
             <p><?php echo $ucontact; ?></p>
        </div>
		 <div class="media-body">
		 <center>
		<p style="margin-top:30px"><font face = "Comic Sans MS">Select your image to upload:</font></p>
         <p>   <input type="file" name="fileToUpload" id="fileToUpload"></p>
			<p><input type="text" name="title" value="" placeholder="Enter Title"></p>
			<p><textarea name = "desc" placeholder="Enter Description" rows="2" cols="30" placeholder="Description"></textarea></p>
			<input type="submit" name="upload" value="Upload" class="btn btn-success" />
			<!--input type="submit" name="edit" value="Edit Info" class="btn btn-success" style="margin-top:50px"/-->
			
		</center>	
		 </div>
		 
		 <?php 
if(isset($_POST['upload'])){
	$target_file =  $_FILES["fileToUpload"]["name"];
    $imgi = $_FILES["fileToUpload"]["tmp_name"];
	move_uploaded_file($imgi,'../images/'.$target_file);
	$hostname1 = 'localhost';
    $username1 = 'root';
    $password1 = '';
    $dbname1 = 'hack';
    $conn1 = mysqli_connect($hostname1, $username1, $password1, $dbname1);
    $sql1 = "INSERT INTO `images`(`img_userid`, `imgpath`, `img_title`, `img_desc`, `img_rate`) VALUES ('".$row['ID']."','".$target_file."','".$_POST['title']."','".$_POST['desc']."',0)";
    $result1 = mysqli_query($conn, $sql1);
	mysqli_close($conn1);
}
?>
 </div>
</form> 
</body>
</html>