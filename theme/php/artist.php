<!DOCTYPE html>
<html lang="en">
  <?php 
  session_start();
$hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'hack';
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $sql = "SELECT * FROM login WHERE ID = '". $_SESSION['ID']."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  
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



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Offline Store</title>
	<link rel="stylesheet" type="text/css" href="../../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<form action="artist.php" method="post" enctype="multipart/form-data">
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="../index.php">Welcome <?php echo $row['user_name']; ?> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="view1.php">View Products</a>
                    </li>
					<li>
                        <input type="submit" name="commit1" value="Logout" class="btn btn-danger col-md-offset-2" style="margin-top:10px;" />
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
	
    <!-- Header -->
	<!--
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>The Offline Store</h1>
                        <h3>Buy in Incognito Mode</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>  -->
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Your Description</h2>
                    <p class="lead"><?php echo $desc; ?></p>
					
					<div class="clearfix"></div>
                    <h2 class="section-heading">Contact Number</h2>
                    <p class="lead"><?php echo $ucontact;; ?></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?php echo "../images/".$imgpath; ?>" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

<center>
    <div class="content-section-a">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Upload New Art</h2>
                    <p class="lead">
					<div class="media-body">
						<center>
							<p style="margin-top:30px"><font face = "Comic Sans MS">Select your image to upload:</font></p>
							 <p>   <input type="file" name="fileToUpload" id="fileToUpload"></p>
							<p><input type="text" name="title" value="" placeholder="Enter Title"></p>
							<p><textarea name = "desc" placeholder="Enter Description" rows="2" cols="30" placeholder="Description"></textarea></p>
							<input type="submit" name="upload" value="Upload" class="btn btn-success" />
						</center>	
					</div>
					</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
	
	<center>
    <!-- /.content-section-b -->>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Bringing Life and Recognition to Culture</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="php/about.php">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li class="footer-menu-divider">&sdot;</li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; The Offline Store 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
			 
<?php 
	if(isset($_POST['upload']))
	{
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
</body>

</html>
