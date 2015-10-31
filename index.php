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
                   <form action="php/validateLogin.php" method="post" enctype="multipart/form-data">
  <section class="container">
    <div class="login">
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
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
    
    
    <div class="container">
        <div class="row" style="margin-top:10px;">
            <button class="btn btn-success col-md-1 col-md-offset-8" data-toggle="modal" data-target="#myModal">Login</button>
            <button class="btn btn-danger col-md-1 col-md-offset-1" data-toggle="modal" data-target="#myModal2">Sign Up</button>
        </div>
    </div>
</body>
</html>