<?php
session_start();

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="City_Market";
$message="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['update_supp']))
{
$suppID=$_POST['Supp_ID'];
$suppName=$_POST['supp_name'];
$suppEmail=$_POST['supp_email'];
$suppNo=$_POST['supp_num'];

$sql1="SELECT * from suppliers where supplier_id='$suppID'";
$sql2="UPDATE suppliers SET company_name ='$suppName',email='$suppEmail',contact_no='$suppNo' WHERE supplier_id='$suppID'";

$result=mysqli_query($conn, $sql1);

if (mysqli_num_rows($result)>0){
if (mysqli_query($conn, $sql2)){

	$message ="You updated the supplier successfully";
}
}
else {
    $message = "Incorrect Supplier ID";
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Supplier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap" rel="stylesheet"> 

</head>
<body style="background-color: #EBEBEB;">

	<!-- header --> 
	<div style="float:left; text-align:center; padding:15px;">
<a href="Main_Page.php">
	<h4> <i class="fa fa-home"></i><br> </h4>
   <h5> Home </h5> 
</a>
</div>

<div style="float:right; text-align:center; padding:15px;">
<a href="logout.php">
  <h4> <i class="fa fa-user"></i><br></h4>
  <h5> Logout </h5> 
</a>
</div>


<div style="float:center; font-family:'Grandstander', cursive; text-align:center; padding:20px;  margin-top:10px;">
  <h2>  City Market <h2>
</div>

<hr>
	<!-- end header --> 
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
								<!-- Insert Item Form --> 
					<form action="" method="post">
					<span class="login100-form-title p-b-32">
						Update Existing Supplier
						<p> &nbsp; </p> 
						<p style="color:grey"> * Supplier ID field cannot be updated </p> 
					</span>
					<p style="color:blue;"> <bold> <?php echo $message; ?> </bold> </p> 
					<p> &nbsp; </p> 

					<span class="txt1 p-b-11">
						Supplier ID
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "ID is required">
						<input class="input100" type="Number" name="Supp_ID" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Supplier Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
						<input class="input100" type="text" name="supp_name" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Supplier Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="email" name="supp_email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Supplier Contact No.
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Contact No. is required">
						<input class="input100" type="tel" placeholder="92xxxxxxxx" pattern="[9][2][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" name="supp_num" >
						<span class="focus-input100"></span>
					</div>
				

					 <input type="submit" value="Update" class="login100-form-btn" name="update_supp" />

						</form> 
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
