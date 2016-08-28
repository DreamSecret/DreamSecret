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
		overflow: auto;
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

	.full-article {
		width: 90%;
		margin: 5%;
		clear: both;
	}

	img {
		width: 100%;
		height: 300px;
		float: left;
	}

	.full-article #procut {
	  width: 10%;
	  height: 10%;
	  position: relative;
	  overflow: hidden;
	  border-radius: 8px;
	  float: left;
	  margin-top: 10px;
	  margin-right: 3%; 
		}

	.full-article #propic{
    display: inline;
    margin: 0 auto;
    height: auto;
    width: 100%;
    float: left;
	}

	.full-article #dateup {
		text-align: right;
		font-size: 15px;
		padding-top: 10px;
		float: right;
		width: 100%
	}

	.complaint {
		width: 87%;
		float: left;
		text-align: left;
		padding-top: 10px;
	}

	.picturetake {
		width: 50%;
		float: right;
	}

	.complaint #name {
		font-size: 15px;
		font-weight: bolder;

	}

	.complaint #date {
		font-size: 15px;
		font-style: italic;
		border-bottom: 1px solid;
		padding-bottom: 10px;
		

	}

	.complaint #message {
		font-size: 15px;
		padding-bottom: 10px;
		padding-top: 10px;
		border-bottom: 1px solid;
		
	}

	.complaint .info-content {
		padding-top: 10px;
		padding-bottom: 10px;
	}

	.complaint .info-content span {
		width: 100%;
		float: left;
	}

	.complaint #com {
		color: green;
		float: right;
		padding-bottom: 20px;
	}

	.comments {
		width: 80%;
		padding: 5%;
		float: right;
		background-color: rgb(200,200,200);
		border-radius: 8px;
	}

	.comment #procut {
	  width: 10%;
	  height: 10%;
	  position: relative;
	  overflow: hidden;
	  border-radius: 8px;
	  float: left;
	  margin-top: 10px;
	  margin-right: 3%; 
		}

	.comment #propic{
    display: inline;
    margin: 0 auto;
    height: auto;
    width: 100%;
    float: left;
	}

	.comments #dateup {
		text-align: right;
		font-size: 15px;
		padding-top: 10px;
		float: right;
		width: 100%
	}

	.comment .complaint {
		width: 87%;
		float: left;
		text-align: left;
		padding-top: 10px;
	}

	.comments .complaint #name {
		font-size: 15px;
		font-weight: bolder;

	}

	.comment .complaint #date {
		font-size: 15px;
		font-style: italic;
		border-bottom: 1px solid;
		padding-bottom: 10px;
		

	}

	.comment .complaint #message {
		font-size: 15px;
		padding-bottom: 10px;
		padding-top: 10px;
		border-bottom: 1px solid;
		
	}


</style>
</head>

<body>
	<div class="main-container">
			<div class="header">
				<button></button>
			</div>

			<div class="selection">
				<a href="">FORUM</a>
				<a href="">RESOLVE</a>
				<a href="">SIMULATE</a>
			</div>

			<div class="full-article">
				<h1>MY PROBLEMS (UNSOLVED)</h1>
				<img src="img/kemepic.jpg">
				<p id="dateup">Date Taken: August 27, 2016</p>

				<div class="senders-info">
					<div id="procut">
					<img id="propic" src="img/logomuna.jpg" >
					</div>
					<div class="complaint">
						<p id = "name">Aldwin B. Labrador</p>
					<p id = "date">August 26, 2016</p>
					<p id = "message">May mga nagpuputol po ng halaman dito samen huhu, pahelp naman pooo.</p>

					<div class="info-content">
						<span>Category: Illegal Logging</span>
						<span>Location: Manila City</span>
						<span>Nearby Landmark: 711</span>	
					</div>

					<p id = "com">3 Comments</p>
					</div>

				</div>

				<div class="comments">
					<div class="comment">
						<div id="procut">
						<img id="propic" src="img/logomuna.jpg" >
						</div>
						<div class="complaint">
							<p id = "name">Aldwin B. Labrador</p>
						<p id = "date">August 26, 2016</p>
						<p id = "message">May mga nagpuputol po ng halaman dito samen huhu, pahelp naman pooo.</p>
						</div>
					</div>

					<div class="comment">
						<div id="procut">
						<img id="propic" src="img/logomuna.jpg" >
						</div>
						<div class="complaint">
							<p id = "name">Aldwin B. Labrador</p>
						<p id = "date">August 26, 2016</p>
						<p id = "message">May mga nagpuputol po ng halaman dito samen huhu, pahelp naman pooo.</p>
						</div>
					</div>


					<div class="comment">
						<div id="procut">
						<img id="propic" src="img/logomuna.jpg" >
						</div>
						<div class="complaint">
							<p id = "name">Aldwin B. Labrador</p>
						<p id = "date">August 26, 2016</p>
						<p id = "message">May mga nagpuputol po ng halaman dito samen huhu, pahelp naman pooo.</p>
						</div>
					</div>



				</div>

			
	</div>


</body>


</html>