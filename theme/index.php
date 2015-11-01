<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Offline Store</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

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
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
                <a class="navbar-brand topnav" href="index.php">Welcome here</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="php/view1.php">View Products</a>
                    </li>
                    <li>
                        <a href="#services" data-toggle="modal" data-target="#myModal">Login</a>
                    </li>
                    <li>
                        <a href="#contact" data-toggle="modal" data-target="#myModal2">SignUp</a>
                    </li>
					
					<li>
                        <a href="php/buyer.php">Buyers Here</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<form name = "myForm" action="php/loginsignup.php" method="post" enctype="multipart/form-data">
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
    <form name = "myForm1" action="php/loginsignup.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
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
    
    <!--
    <div class="container" style="background-color:#000;padding-bottom:10px;border:3px dotted #FFFFFF;">
        <div class="row" style="margin-top:10px;">
            
		       
            <button class="btn btn-success col-md-1 col-md-offset-7" data-toggle="modal" data-target="#myModal">Login</button>
            <button class="btn btn-danger col-md-1" style="margin-left:10px;" data-toggle="modal" data-target="#myModal2">Sign Up</button>
            <form name = "myForm5" action="index.php" method="post" enctype="multipart/form-data">
            <input type="submit" class="col-md-2 btn btn-warning" style="margin-left:10px;" name="commit5" value="BUYERS HERE" class="btn btn-danger"  /> 
            </form>
        </div>
    </div> 
	-->
	
	
    <!-- Header -->
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

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The Art of Pottery</h2>
                    <p class="lead">Pottery is a lost art. In villages where electricity is rare, and refrigerators are null, we have pots to keep our water cool. The art that covers makes it all much better.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/art1.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The Art of Painting</h2>
                    <p class="lead">Painting is best of the Fine Arts. The images here sell for millions of rupees. And the trend is just starting.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/art2.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Threading and Knitting</h2>
                    <p class="lead">This is the famouus 'Lato' doll, made from colourful threads made of silk. We have special knitted dolls which can kick Barbie's ass any time.</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/art3.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
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
                            <a href="index.php">Home</a>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
