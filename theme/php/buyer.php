<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Savvy Kalakar</title>
	<link rel="stylesheet" type="text/css" href="../../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
</head>

<body>
	<script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript">
    function validateForm()
    {
    var x=document.forms["myForm1"]["login11"].value;
	var y=document.forms["myForm1"]["login12"].value;
	var z=document.forms["myForm1"]["login13"].value;
	var p1=document.forms["myForm1"]["login15"].value;
	var p2=document.forms["myForm1"]["login16"].value;
    if (x.length==0)
      {
      alert('Please enter your username');
      return false;
      }
	else if(y.length==0)
	{
		alert('Please enter your name');
      return false;
	}
	else if(z.length==0)
	{
		alert('Please enter your contact no');
      return false;
	}
	else if(p1!=p2)
	{
		alert('Passwords dont match');
      return false;
	}
	else
	{
		return true;
	}
    }
    </script>
	<form name = "myForm" action="buyer.php" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label">Login</h3>
                </div>
                <div class="modal-body">
  <section class="container">
    <div class="login">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
     <!--   <p class="submit"><input type="submit" name="commit" value="Login"></p>	-->
    </div>
  </section>
  
                </div>
                <div class="modal-footer">
                
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="commit" value="Login" class="btn btn-success" />
                    
                </div>
            </div>
        </div>
    </div>
	</form>
    <form name = "myForm1" action="buyer.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal2-label">Sign Up</h3>
                </div>
                <div class="modal-body">
				<center>
                    <p><input type="text" name="login11" value="" placeholder="Enter your Username"></p>
					<p><input type="text" name="login12" value="" placeholder="Name"></p>
                    <p><input type="password" name="login15" value="" placeholder="Password"></p>
   				    <p><input type="password" name="login16" value="" placeholder="Confirm Password"></p>
					Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
					</center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="commit2" value="Signup" class="btn btn-success"  />
                </div>
            </div>
        </div>
    </div>
	</form>
    
    
    
    
    
    
    
    
    <div class="container" style="background-color:#000;padding-bottom:10px;border:3px dotted #FFFFFF;">
        <div class="row" style="margin-top:10px;">
         
		    <!--font color = "white"><h1 style="float:right">OnlineKalakar.com</h1></font-->
            
            
            <form name = "myForm3" action="buyer.php" method="post" enctype="multipart/form-data">
		       <input type="submit" class="col-md-1 btn btn-warning" style="margin-left:10px;" name="commit3" value="BACK" class="btn btn-danger"  /> 
             </form> 
            <button class="btn btn-success col-md-1 col-md-offset-7	" data-toggle="modal" data-target="#myModal">Login</button>
            <button class="btn btn-danger col-md-1" style="margin-left:10px;" data-toggle="modal" data-target="#myModal2">Sign Up</button>
          </div>
    </div>
	<div class="container" style="margin-top:50px;margin-bottom:50px">
        <div id="my-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#my-carousel" data-slide-to="1"></li>
                <li data-target="#my-carousel" data-slide-to="2"></li>
                <li data-target="#my-carousel" data-slide-to="3"></li>
                <li data-target="#my-carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <center><img alt="First slide" src="../images/art1.jpg" width="440" height="300"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Second slide" src="../images/art2.jpg" width="440" height="300"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 2</h3>
                        <p>Morbi eget libero quis metus consectetur semper.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Third slide" src="../images/art3.JPG" width="440" height="300"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fourth slide" src="../images/art4.jpg" width="440" height="300"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fifth slide" src="../images/art5.jpg" width="440" height="300"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#my-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
	<font face = 'comic sans ms' size = '5'>
	<p align = 'center'> Buyers Can Place a bid on the Products Available.</p>
	<p align = 'center'> Interested can register themselves.</p>
	</font>
    
    <?php
  if(isset($_POST['commit']))
{
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT id,buyer_id,password FROM buyer";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$flag=0;
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row['buyer_id'],$_POST['login'])==0 && strcmp($row["password"],$_POST['password'])==0)
		{   session_start();
		    $_SESSION['ID2']=$row["id"];
			echo "<script>window.location.href='buy1.php'</script>";
		 }
		 else
		 {   $flag=1;
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
	move_uploaded_file($imgi,'../images/'.$target_file);
	$hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hack';
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $sql = "INSERT INTO `buyer`(`buyer_id`, `buyer_name`, `password`, `buyerimg`) VALUES ('".$_POST['login11']."','".$_POST['login12']."','".$_POST['login15']."','".$target_file."')";
    $result = mysqli_query($conn, $sql);
	mysqli_close($conn);
}
if(isset($_POST['commit3'])){
	echo "<script>window.location.href='../index.php'</script>";
}
?>
</body>
</html>