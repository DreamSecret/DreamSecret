<!DOCTYPE HTML>
<?php include('connection.php'); ?>	
<html>

<head>
<title></title>

<style type="text/css">
*{
	margin: 0px auto;
	padding: 0px auto;
}

body {
		width: 100%;
		font-family: arial;
	}
	body {
		width: 100%;
		font-family: arial;
	}

	.main-container{
		width: 40%;
		clear: both;
		text-align: center;
		background-color: white;
		padding-bottom: 60px;
	}

	img {
		margin-top: 50px;
		width: 150px;
		margin-bottom: 25px;
	}

	.form-contain {
		width: 70%;
		border-radius: 20px;
		background-color: rgba(1,1,1,.75);
		text-align: center;
		clear: both;
		padding-top: 50px;
		padding-bottom: 60px;

	}

	label {
		width: 100%;
		font-size: 18px;
		color: white;
		float: left;
		text-align: center;
		margin: 5px;
	}

	input[type="text"]{
		border-radius: 5px;
		height:30px; 
		clear:both;
		width: 80%;
		text-align: center;
		margin-bottom: 25px;
		font-size: 18px;
		border: none;
	}

	input[type="password"] {
		border-radius: 5px;
		height:30px; 
		clear:both;
		text-align: center;
		width: 80%;
		margin-bottom: 25px;
		font-size: 18px;
		border: none;
	}

	input[type="submit"]{
		width: 35%;
		height: 35px;
		border-radius: 5px;
		background-color: rgb(0,176,78);
		border-color: transparent;
		color: white;
		font-size: 18px;
		margin: 5%;

	}

	p {
		margin-bottom: 25px;
		width: 100%;
		color: red;
	}

@media only screen and (min-width: 540px) and (min-height: 960px) and (orientation: portrait){
	body {
		width: 100%;
		font-family: arial;
	}
	.main-container{
		margin-top: 300px;
		width: 100%;
		clear: both;
		text-align: center;
	}
	img {
		width: 300px;
		margin-bottom: 25px;
	}
	.form-contain {
		width: 60%;
		border-radius: 30px;
		background-color: rgba(1,1,1,.75);
		text-align: center;
		clear: both;
		padding-top: 80px;
		padding-bottom: 60px;
	}
	label {
		width: 100%;
		font-size: 24px;
		color: white;
		float: left;
		text-align: center;
		margin: 5px;
	}
	input[type="text"]{
		border-radius: 8px;
		height:40px; 
		clear:both;
		width: 400px;
		text-align: center;
		margin-bottom: 25px;
	}
	input[type="password"] {
		border-radius: 8px;
		height:40px; 
		clear:both;
		text-align: center;
		width: 400px;
		margin-bottom: 25px;
	}
	input[type="submit"]{
		width: 180px;
		height: 40px;
		margin: 20px;
		border-radius: 8px;
		background-color: rgb(0,176,78);
		border-color: transparent;
		color: white;
	}
	p {
		margin-bottom: 25px;
		width: 100%;
		color: red;
	}
}
</style>
</head>

<body>
	
	<div class="main-container">
		<img src="img/logo.png">
		<div class="form-contain">
			<form method="POST" action="" entype="multipart/form-data">
				<label>Organization:</label>
				<input type="text" name="org">

				<label>Ranger First Name:</label>
				<input type="text" name="rfname">
				<label>Ranger Last Name:</label>
				<input type="text" name="rlname">
				<label>Code Name:</label>
				<input type="text" name="codename">


				<label>Password:</label>
				<input type="password" name="pass">
				<label>Complete Address:</label>
				<input type="text" name="address">
				<label>Municipality:</label>
				<input type="text" name="city">
				<label>Display Picture:</label>
				<input type="file" name="picture" >				
				<p></p>
				<input type="submit" value="LOGIN" name="login"><input type="submit" value="REGISTER" name="reg">

			</form>

		</div>

	</div>


</body>


</html>

<?php 
	echo("<script>alert('202');</script>");
	if(isset($_POST['reg'])){
	echo("<script>alert('203');</script>");
	//include("php_raw/add_account_php.php");
	echo("<script>alert('205');</script>");
	$organization = $_POST['org'];
	$first_name = $_POST['rfname'];
	$last_name = $_POST['rlname'];
	$codename = $_POST['codename'];
	$password = $_POST['pass'];
	$address = $_POST['address'];
	$municipality = $_POST['city'];
	$display_picture = $_POST['picture'];
	echo("<script>alert('217');</script>");
	$query = "insert into accounts(organization,first_name,last_name,codename,display_picture,address,municipality,password) values('".$organization."','".$first_name."','".$last_name."','".$codename."','".$display_picture."','".$address."','".$municipality."','".$password."')";

	//$query = "SAMPLE";
	echo("<script>alert('".$query."');</script>");
	if(mysqli_query($conn,$query)){
         echo("<script>alert('Success');</script>");
      }
      else{
         echo("<script>alert('".$query."');</script>");
      }
	//add_account($organization,$first_name,$last_name,$codename,$display_picture,$address,$municipality,$password);
	}
?>