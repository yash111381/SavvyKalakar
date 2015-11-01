<?php
  if(isset($_POST['commit']))
{
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT user_id,password FROM login";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row['user_id'],$_POST['login'])==0 && strcmp($row["password"],$_POST['password'])==0)
		{echo "<script>alert('done');</script>";
		 }
		 else
		 {
			 echo "<script>alert('error');</script>";
		 }
       }
	}
  
}
?>