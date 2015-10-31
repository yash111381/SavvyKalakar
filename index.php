<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Kalakar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style1.css"/>

</head>
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
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="php/buyer.php">FOR BUYERS</a>
				<a class="navbar-brand page-scroll" href="index.php" style = "padding-left:400px"><font face = "Comic Sans ms" size = "5">OnlineKalakar.com</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services" data-toggle="modal" data-target="#myModal">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio" data-toggle="modal" data-target="#myModal2">Signup</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<form name = "myForm" action="index.php" method="post" enctype="multipart/form-data">
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
	<form name = "myForm1" action="index.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
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
					<p><input type="text" name="login13" value="" placeholder="Contact No"></p>
					<p><textarea name = "area1" placeholder="Enter Description" rows="4" cols="50"></textarea></p>
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
	
    <header>
        <div class="header-content">
            <div class="header-content-inner">
<div class="container" style="margin-top:100px;margin-right:50px">
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
                    <center><img alt="First slide" src="images/art1.jpg" width="540" height="400"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Second slide" src="images/art2.jpg" width="540" height="400"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 2</h3>
                        <p>Morbi eget libero quis metus consectetur semper.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Third slide" src="images/art3.JPG" width="540" height="400"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fourth slide" src="images/art4.jpg" width="540" height="400"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fifth slide" src="images/art5.jpg" width="540" height="400"></center>
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
            </div>
        </div>
    </header>
	<h3 align = "center"><i>You can view our products <a href="php/view1.php">here</a></i></h3>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
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
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$flag=0;
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row['user_id'],$_POST['login'])==0 && strcmp($row["password"],$_POST['password'])==0)
		{   session_start();
		    $_SESSION['ID']=$row["ID"];
			echo "<script>window.location.href='php/artist.php'</script>";
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
	echo "<script>window.location.href='php/buyer.php'</script>";
}

?>
</body>

</html>
