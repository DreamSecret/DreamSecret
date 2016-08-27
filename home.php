<!DOCTYPE HTML>
	
<html>

<head>
<title></title>

<style type="text/css">

*{
	margin: 0px auto;
	padding: 0px auto;
}

@media only screen and (min-width: 540px) and (min-height: 960px) and (orientation: portrait){
	body {
		width: 100%;
		font-family: arial;
	}

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

	.header {
		height: 50px;
		background-color: rgb(80,80,80);
		width: 100%;
		float: left;
	}

	.selection {
		width: 93%;
		float: right;
		margin: 3.5%;
		text-align: right;
	}

	.selection a {
		width: 100px;
		padding: 10px;
		border-radius: 8px;
		border:transparent;
		background-color: rgb(0,175,80);
		text-decoration: none;
		color: white;
		font-size: 18px;
		padding-left: 20px;
		padding-right: 20px;

	}

	.form-content {
		width: 80%;
		background-color: rgb(200,200,200);
		clear: both;
		padding: 5%;
		margin: 5%;
	}

	.form-content h1 {
		font-size: 18px;
		float: left;
	}

	.form-content form {
		clear: both;
	}

	.form-content tr {
		width: 95%;
		height: 40px;
		text-align: left;
	}

	.form-content td {

	}

	.form-content input[type="text"]{
		width: 100%;
		height: 30px;
		border-radius: 8px;
		border: transparent;
		text-align: center;
	}

	.form-content textarea {
		width: 100%;
		height: 100px;
		border-radius: 8px;
		border: transparent; 
	}

	.form-content input[type="date"]{
		width: 100%;
		height: 30px;
		border-radius: 8px;
		text-align: center;
	}

	.form-content input[type="file"]{
		
		height: 30px;
		border-radius: 8px;
	}

	.unresolve-forum {
		width: 90%;
		margin: 5%;
		clear: both;

	}

	.unresolve-forum h1 {
		font-size: 18px;
		text-align: left;
		border-bottom: 1px solid;
		width: 100%;
		padding-bottom: 10px;
	}


	.unresolve-forum #procut {
	  width: 19%;
	  height: 19%;
	  position: relative;
	  overflow: hidden;
	  border-radius: 8px;
	  float: left;
	  margin-top: 10px;
	  margin-right: 1%; 
		}

	.unresolve-forum #propic{
    display: inline;
    margin: 0 auto;
    height: auto;
    width: 100%;
    float: left;
}

	.right-info {
		width: 80%;
		background-color: ;
		float: left;
		margin-top: 10px;
	}

	.infos {
		width: 50%;
		float: left;
		text-align: left;
	}

	.picturetake {
		width: 50%;
		float: right;
	}

	.infos #name {
		font-size: 15px;
		font-weight: bolder;

	}

	.infos #date {
		font-size: 15px;
		font-style: italic;
		border-bottom: 1px solid;
		padding-bottom: 10px;
		

	}

	.infos #message {
		font-size: 15px;
		padding-bottom: 10px;
		padding-top: 10px;
		border-bottom: 1px solid;
		
	}

	.info-content {
		padding-top: 10px;
		padding-bottom: 10px;
	}


</style>
</head>

<body>
	<div class="main-container">
			<div class="header">
				<button></button>
				<img src="">
			</div>

			<div class="selection">
				<a href="">FORUM</a>
				<a href="">RESOLVE</a>
				<a href="">SIMULATE</a>
			</div>

			<div class="form-content">
				<form action="" method="POST" entype="multipart/form-data">
					<h1>PROBLEM | FOREST</h1>
					<table>
						<tr>
							<td><label>Add Photo Video: </label></td>
							<td><input type="file" name="uploaded-img-vid" ></td>
						</tr>

						<tr>
							<td><label>Category: </label></td>
							<td><input type="text" name="cat"></td>
						</tr>

						<tr>
							<td><label>Description: </label></td>
							<td><textarea name="des" ></textarea></td>
						</tr>

						<tr>
							<td><label>Location: </label></td>
							<td><input type="text" name="loc"></td>
						</tr>

						<tr>
							<td><label>Nearby Landmark: </label></td>
							<td><input type="text" name="NL"></td>
						</tr>

						<tr>
							<td><label>Photo Date Taken: </label></td>
							<td><input type="date" name="date"></td>
						</tr>

					</table>
				</form>
			</div>

			<div class="unresolve-forum">
				<h1>MY PROBLEMS (UNRESOLVED)</h1>

				<div class="selection-forum-content">
					<div id="procut">
					<img id="propic" src="img/logomuna.jpg" >
					</div>
					<div class="right-info">
						<div class="infos">
					<p id = "name">Aldwin B. Labrador</p>
					<p id = "date">August 26, 2016</p>
					<p id = "message">May mga nagpuputol po ng halaman dito samen huhu, pahelp naman pooo.</p>

					<div class="info-content">
						<span>Category: Illegal Logging</span>
						<span>Location: Manila City</span>
						<span>Nearby Landmark: 711</span>	
					</div>

					<p>3 Comments</p>
					</div>

					<div class="picturetake">
					<img src="img/logomuna.jpg">
					</div>
					</div>



				</div>

			</div>

	</div>


</body>


</html>