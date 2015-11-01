<?php
  if(isset($_POST['commit']))
{
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT ID,user_id,password FROM login";
  $result = mysqli_query($conn, $sql);
  ?>
  
 <?php
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$flag=0;
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row['user_id'],$_POST['login'])==0 && strcmp($row["password"],$_POST['password'])==0)
		{   session_start();
		    $_SESSION['ID']=$row["ID"];
			echo "<script>window.location.href='artist.php'</script>";
		 }
		 else
		 {   $flag=1;
			 //echo "<script>alert('error');</script>";
		 }
       }
	   if($flag==1){
		   echo "<script>alert('error');</script>";
	   }
	}
	mysqli_close($conn);
}
if(isset($_POST['commit2'])){
	$target_file =  $_FILES["fileToUpload"]["name"];
    $imgi = $_FILES["fileToUpload"]["tmp_name"];
	move_uploaded_file($imgi,'images/'.$target_file);
	$hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hack';
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $sql = "INSERT INTO `login`(`user_id`, `user_name`, `password`, `description`, `contact_no`, `impath`) VALUES ('".$_POST['login11']."','".$_POST['login12']."','".$_POST['login15']."','".$_POST['area1']."','".$_POST['login13']."','".$target_file."')";
    $result = mysqli_query($conn, $sql);
	mysqli_close($conn);
}
if(isset($_POST['commit5'])){
	echo "<script>window.location.href='buyer.php'</script>";
}
else{
	header('Location: artist.php');
}

?>
