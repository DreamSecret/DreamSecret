<<<<<<< HEAD
<!DOCTYPE HTML>
<?php include('connection.php');session_start(); ?>	
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
		height:50px; 
		clear:both;
		text-align: center;
		width: 400px;
		margin-bottom: 25px;
		font-size: 24px;
	}

	input[type="submit"]{
		width: 180px;
		height: 50px;
		margin: 20px;
		border-radius: 8px;
		background-color: rgb(0,176,78);
		border-color: transparent;
		color: white;
		font-size: 24px;

	}

	p {
		margin-bottom: 25px;
		width: 100%;
		color: red;
	}



}

</style>
=======
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php  include('php/style.php'); ?>

		<link rel="stylesheet" type="text/css" href="css/style.css"></link>


>>>>>>> f35903894c087895c0d3ae04ca80c909a8e2b04b
</head>

<body>

<<<<<<< HEAD
	<?php 
		if (!isset($_POST['login'])) {
					
				$warning = "";
		}

	?>
	
	<div class="main-container">
		<img src="img/logo.png">
		<div class="form-contain">
			<form method="POST" action="">
				<label>Ranger Name:</label>
				<input type="text" name="rname">
				<label>Password:</label>
				<input type="password" name="pass">
				<p><?php //echo $warning; ?></p>
				<input type="submit" value="LOGIN" name="login" style="margin-right: 20px">
				<input type="submit" value="REGISTER" name="reg" action="register.php">

			</form>

		</div>

	</div>


</body>


</html>

<?php 



if(isset($_POST['login'])){

	$warning="";
	$name = $_POST['rname'];
	$pass = $_POST['pass'];

	$query = "select * from accounts where last_name='$name' and password='$pass'";
	$queryres = mysqli_query($conn,$query);

	if(mysqli_num_rows($queryres)!=0){
		$row = mysqli_fetch_assoc($queryres);
		$_SESSION['user_id'] = $row['id'];
		echo("<script>alert('Welcome');window.location='home.php'</script>");
	}
	else{
		echo("<script>alert('Wrong Username or Password');</script>");
	}

	// if(($name == "patrick") && ($pass == "pass")){
	// 	$warning = "Success!";
	// }

	// else{
	// 	$warning = "* Wrong Password of Username";
	// }


}else if(isset($_POST['reg'])){
	echo "<script>window.location.href='register.php'</script>";
}

?>
=======
	<div class="row">

		<div class="col-xs-12">

		</div>

		<div class="col-xs-2">

		</div>

		<div class="col-xs-8 black-box">
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Ranger Name:</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password:</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
		
			  <button type="submit" class="btn btn-success btn-block">Login</button>
			</form>
	</div>
		</div>

	<div class="col-xs-2">

	</div>

</body>

</html>
>>>>>>> f35903894c087895c0d3ae04ca80c909a8e2b04b
