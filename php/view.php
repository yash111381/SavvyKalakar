<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <link href="../css/test.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!--script src="src/bootstrap-rating-input.js"></script-->
    <script src="../js/bootstrap-rating-input.min.js"></script>
	<script>
      $(function(){
        $('input').on('change', function(){
          alert("Changed: " + $(this).val())
        });
      });
    </script>
    <style type="text/css">
	@charset "utf-8";
/* CSS Document */
body{background-image:url(../images/bbb.jpg);}

#heading{text-align:center;
		font-style:normal;
		margin-top:10px;
		margin-left:100px;
		font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background-color:inherit;
		display:block;
		color:#C00;
		font-size:25px;
		font-weight:!important;
		width:400px;
		padding:20px 10px;
		}
		
#logo{float:right;
border:3px red dotted;
		margin-top:0;
		margin-right:100px;}

#login	{border-color:#360;
		border-style:dashed;
		margin-top:10px;
		background-image:url(../images/text4.jpg);
		}
		
#tabs{padding:0;
		text-align:right;
		margin:10px 150px 10px 10px;
	}
	
#wel{text-align:left;
	margin:10px 10px 10px 100px;
	font-weight:bolf;
	color:#C00;
	
}
		
#heads	{border:none;
		color:#006;
		background:#FF9;
		text-align:center;
}

	</style>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;">

<h1 align = "center"><font face = "monotype corsiva">PRODUCT DETAILS:</font></h1>

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


//header("Location: Website/login.php");
//echo "<h1>Hello</h1>";
//die();
?>









<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)){ 
   $maruphoto="../images/".$row["imgpath"];
   $imgtitle=$row["img_title"];
   $imgdesc=$row['img_desc'];
   $imgrate=$row['img_rate'];?>
    
<!--<h2 id="update"> <a href=''>UPDATE</a></h2>
<h2 id="delete"> <a href=''>DELETE</a></h2>
-->

<table id="userInfo" width="60%" style="margin-top:50px;"  cellspacing="10" cellpadding="5" align="left">
  	<tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong></strong></th>
      
    </tr>
  
   <tr>
      <td width="30%" id="heads"><strong>Title:</strong></td>
      <td width="70%" id="detail">
       	<?php echo $imgtitle; ?></td>
    </tr>
  <tr>
      <td width="30%" id="heads"><strong>Description:</strong></td>
      <td width="70%" id="detail">
       <?php echo $imgdesc; ?></td>
    </tr>

  <tr>
      <td width="30%" id="heads"><strong>Current Product-Rating:</strong></td>
      <td width="70%" id="detail">
       <?php echo "2"; ?></td>
    </tr>
   <tr>
      <td width="30%" id="heads"><strong>Highest Bid:</strong></td>
	  <td width="70%" id="detail"></td>
     </tr>
	 <tr>
      <td width="30%" id="heads"><strong>Place Bid:</strong></td>
	  <td width="70%" id="detail"><input type="text" name="bidvalue" placeholder="Enter Your Bid"><input type="submit" name = ""></td>
     </tr>


</table>

<img id="userPhoto" style="margin-top:50px;" src="<?php echo $maruphoto; ?>" width="300" height="200"/>

<hr>
<?php    	 
   }

} else {
  
}
mysqli_close($conn);?>

















<form action="view.php" method="post" enctype="multipart/form-data">






<!-- #endregion Jssor Slider End -->
</form>
</body>
</html>
