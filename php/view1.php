<?php 
$img_id=$_GET["v"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!--script src="src/bootstrap-rating-input.js"></script-->
    <script src="../js/bootstrap-rating-input.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="padding:0px; margin:0px; background-color:#fff;">
<form action="view1.php?v=<?php echo $img_id; ?>" method="post" enctype="multipart/form-data">

<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-2.1.4.min.js"></script>
<script>
      $(function(){
        $('input').on('change', function(){
          var x = $(this).val();
        });
      });
    </script>
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
$sql = "SELECT * FROM images where img_id = ".$img_id;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)){ 
   $maruphoto="../images/".$row["imgpath"];
   $imgtitle=$row["img_title"];
   $imgdesc=$row['img_desc'];
 	?>

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
      <td width="30%" id="heads"><strong>Rate the Product:</strong></td>
      <td width="70%" id="detail"><input type="number" name="your_awesome_parameter" id="some_id" class="rating" data-clearable="remove" data-icon-lib="fa" data-active-icon="fa-heart" data-inactive-icon="fa-heart-o" data-clearable-icon="fa-trash-o"/></td>
   </tr>
	 <tr>
      <td width="30%" id="heads"><strong>Final Rate:</strong></td>
	  <td width="70%" id="detail"><input type="submit" name = "submit1" value = "Submit"></td>
     </tr>


</table>

<img id="userPhoto" style="margin-top:50px;" src="<?php echo $maruphoto; ?>" width="300" height="200"/>

<hr>
<?php    	 
   }

} else {
  
}
?>

<?php 
if(isset($_POST['submit1']))
{
    $var = $_POST['your_awesome_parameter'];
	$var = $var+1;
    $sql1 = "INSERT INTO `rate`(`img_id`, `rate_value`) VALUES ('".$img_id."','".$var."') ";
$result1 = mysqli_query($conn, $sql1);
	 
}
mysqli_close($conn);
?>

</form>
</body>
</html>
