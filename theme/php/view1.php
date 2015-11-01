<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hack";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);
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
	
	<script>
      $(function(){
        $('input').on('change', function(){
          var x = $(this).val();
        });
      });
    </script>
		
</head>

<body>
	<form action="artist.php" method="post" enctype="multipart/form-data">
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-rating-input.min.js"></script>

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
                <a class="navbar-brand topnav" href="artist.php"> Home </a>
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


    </div>
    <!-- /.intro-header -->
<!-- Page Content -->

	<div class="content-section-b">

        <div class="container">
                <div class="col-lg-5 col-sm-6">
                    <hr>
                    <center> <h2>Product Information</h2> </center>
            </div>
        </div>
        <!-- /.container -->

    </div>
	
<?php
//header("Location: Website/login.php");
//echo "<h1>Hello</h1>";
//die();

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
   while($row = mysqli_fetch_assoc($result))
   { 
   $maruphoto="../images/".$row["imgpath"];
   $imgtitle=$row["img_title"];
   $imgdesc=$row['img_desc'];
   
?>

	
	<a  name="services"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <p class="lead"><b> Title : </b> <?php echo $imgtitle; ?> </p>
					<p class="lead"><b> Description : </b> <?php echo $imgdesc; ?> </p>
					<p class="lead"><b> Rate the Product : </b> <input type="number" name="your_awesome_parameter" id="some_id" class="rating" data-clearable="remove" data-icon-lib="fa" data-active-icon="fa-heart" data-inactive-icon="fa-heart-o" data-clearable-icon="fa-trash-o"/> </p>
					<p class="lead"><b> Final Rate : </b> <input type="submit" name = "submit1" value = "Submit"></p>
					<div class="clearfix"></div>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="<?php echo $maruphoto; ?>" width="400px" height="250px">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <!-- /.content-section-b -->>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    
    <!-- /.banner -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
<?php    	 
   }

} else {
  
}
mysqli_close($conn);?>

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
</body>

</html>
