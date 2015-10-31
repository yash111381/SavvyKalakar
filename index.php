<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Savvy Kalakar</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    
    
</head>

<body>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label">Login</h3>
                </div>
                <div class="modal-body">
                   <form action="index.php" method="post" enctype="multipart/form-data">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    
     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal2-label">Sign Up</h3>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to submit this album?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container" style="background-color:#000;padding-bottom:10px;border:3px dotted #FFFFFF;">
        <div class="row" style="margin-top:10px;">
            <button class="btn btn-success col-md-1 col-md-offset-9" data-toggle="modal" data-target="#myModal">Login</button>
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
                    <center><img alt="First slide" src="images/art1.jpg" width="640" height="500"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Second slide" src="images/art2.jpg" width="640" height="500"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 2</h3>
                        <p>Morbi eget libero quis metus consectetur semper.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Third slide" src="images/art3.JPG" width="640" height="500"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fourth slide" src="images/art4.jpg" width="640" height="500"></center>
                    <div class="carousel-caption">
                        <h3>Caption heading 3</h3>
                        <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                    </div>
                </div>
                <div class="item">
                    <center><img alt="Fifth slide" src="images/art5.jpg" width="640" height="500"></center>
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
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row['user_id'],$_POST['login'])==0 && strcmp($row["password"],$_POST['password'])==0)
		{   session_start();
		    $_SESSION['ID']=$row["ID"];
			echo "<script>window.location.href='php/artist.php'</script>";
		 }
		 else
		 {
			 echo "<script>alert('error');</script>";
		 }
       }
	}
}
?>
</body>
</html>