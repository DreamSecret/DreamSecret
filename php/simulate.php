<!DOCTYPE HTML>
	
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"></link>
	<!--<link rel="stylesheet" type="text/css" href="../css/dad.css"></link>-->
	<!--<link rel="stylesheet" type="text/css" href="../css/foundation.min.css"></link>-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"></link>

	<script src="interact.min.js" ></script>
	<script src="foundation.min.js" ></script>

	<script>
	function allowDrop(ev) {
	    ev.preventDefault();
	}

	function drag(ev) {
	    ev.dataTransfer.setData("text", ev.target.id);
	    document.getElementById(ev.target.id).style.width="100%";
	}

	function drop(ev) {
	    ev.preventDefault();
	    var data = ev.dataTransfer.getData("text");

	    ev.target.appendChild(document.getElementById(data));

	   // document.getElementById(ev.target.id).src='../img/treefire1.png';
	   
	    if(ev.target.id == 'tree' || ev.target.id  =='fire'){

	    	document.getElementById(ev.target.id).src='../img/treefire2.png';
	    	document.getElementById('detailsFire').style.display='block';
	    	document.getElementById('details').style.display='none';

	    }else if (ev.target.id == 'water'){

	    	document.getElementById(ev.target.id).src='../img/tree2.png';

	    }else if (ev.target.id == 'seed' || ev.target.id == 'soil'){
			document.getElementById(ev.target.id).src='../img/seed2.png';
			document.getElementById('details').style.display='block';
			document.getElementById('detailsFire').style.display='none';
	    }


	}
	</script>

<style type="text/css">

*{
	margin: 0px auto;
	padding: 0px auto;
}
</head>

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

	.text-left {
		text-align: left;
	}

	.header {
		height: 60px;
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

	.panel {

		width: 90%;
		margin: 5%;
		overflow: auto;

	}

	.panel .left-panel {
		width: 20%;
		height: 500px;
		float: left;
		background-color: rgb(200,200,200);
	}

	.panel .right-panel {
		width: 78%;
		height: 378px;
		float: right;
		border: 1px solid;
	}

	.buttons {
		float: left;
		width: 100%;
		text-align: right;
		padding-top: 10px;
	}

	.buttons button {
		border-radius: 8px;
		border: 1px solid;
		background-color: white;
		padding: 10px;
		width: 190px;
		cursor: pointer;
	}

	.header img {
		width: 15%;
		margin-left: -20%;
	}

	.profilecutter {
	  width: 18%;
	  position: relative;
	  overflow: hidden;
	  border-radius: 50%;
	  float: left;
	  margin-top: 3%;
	  margin-left: 3%;

		}

	.profilecutter img{
    display: inline;
    margin: 0 auto;
    height: auto;
    width: 100%;
    float: left;
	}


@media only screen and (min-width: 720px) and (min-height: 1280px) and (orientation: portrait){
	body {
		width: 100%;
		font-family: arial;
	}

	.main-container{
		width: 80%;
		clear: both;
		text-align: center;
		background-color: white;
		padding-bottom: 60px;
	}

	.header {
		height: 60px;
		background-color: rgb(80,80,80);
		width: 100%;
		float: left;
	}

	.selection {
		width: 93%;
		float: right;
		margin: 3.5%;
		text-align: right;
		margin-bottom: 10%;
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

	.panel {

		width: 90%;
		margin: 5%;
		overflow: auto;

	}

	.panel .left-panel {
		width: 20%;
		height: 500px;
		float: left;
		background-color: rgb(200,200,200);
	}

	.panel .right-panel {
		width: 78%;
		height: 500px;
		float: right;
		border: 1px solid;
	}

	.buttons {
		float: left;
		width: 100%;
		text-align: right;
		padding-top: 10px;
	}

	.buttons button {
		border-radius: 8px;
		border: 1px solid;
		background-color: white;
		padding: 10px;
		width: 190px;
		cursor: pointer;
	}

	.header img {
		width: 15%;
		margin-left: -20%;

	}

	.profilecutter {
	  width: 18%;
	  position: relative;
	  overflow: hidden;
	  border-radius: 50%;
	  float: left;
	  margin-top: 3%;
	  margin-left: 3%;
		}

	.profilecutter img{
    display: inline;
    margin: 0 auto;
    height: auto;
    width: 100%;
    float: left;
	}
	
	.hide {
		display: none;
	}

}

</style>
</head>

<body>
	<div class="main-container">
			<div class="header">
				<div class="profilecutter">
					<img src="../img/default.jpg">
				</div>
				
				<img src="../img/logo2.png">
			</div>

			<div class="selection">
				<a href="../forum.php">FORUM</a>
				<a href="../resolved.php">RESOLVE</a>
				<a href="../simulate.php" style="background-color:#0072bd">SIMULATE</a>
			</div>

			<div class="panel">
				<div class="left-panel">
					<div class="col-xs-12">
							<div class="col-xs-12" ondrop="drop(event)" ondragover="allowDrop(event)">
								<img id="tree" class="img-thumbnail img-responsive" src="../img/tree.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)"width="70px" >

								<img id="fire" class="img-thumbnail img-responsive" src="../img/fire1.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)" width="70px">

								<img id="water" class="img-thumbnail img-responsive" src="../img/water.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)"width="70px" >

								<img id="seed" class="img-thumbnail img-responsive" src="../img/seed.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)" width="70px">

								<img id="seed2" class="img-thumbnail img-responsive" src="../img/seed2.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)"width="70px" >

								<img id="soil" class="img-thumbnail img-responsive" src="../img/soil.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)"width="70px" >

								<!--<img id="drag1" class="img-thumbnail img-responsive" src="../img/water.png" draggable="true" ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)" width="70px" > -->
							</div>
					</div>
				</div>
				<div class="right-panel" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="col-xs-12 spacer5 range-slider" data-slider>
						  <span class="range-slider-handle" role="slider" tabindex="0"></span>
						  <span class="range-slider-active-segment"></span>
						  <input type="hidden">
					</div>
				</div>

				<div class="buttons">
					<button onClick="window.location.reload()">Stop</button>
					<button onClick="window.location.href='simulate.php'">Execute for result</button>
				</div>
			</div>

			<div class="panel panel-default text-left hide" id="details">
					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Details</button>
				  <div class="panel-body"><br><b>Season to Plant:</b>
		  			<p>January, Febuary, March, April</p>
				  </div>

				  <div class="panel-body"><b>Climatic and Soil Requirements:</b>
		  			<p>It can be grown from low to mid elevations throughout the year. Production is best, however, during the dry season in sandy to clay loam soil, with a pH of 5.5-6.5.</p>
				  </div>

				  <div class="panel-body"><b>Planting:</b>
		  			<p>A1-ha production area requires kg seeds.</p>
		  			<p>This plant can either be sown directly in soil or transplanted. Direct seeding is carried out by broadcasting or by sowing in rows. Cover seeds to a depth of about 1 cm by raking or spreading additional topsoil. Water immediately after sowing. Plant spacing should be 10 cm between plants and 20 cm between rows.</p>
		  			<p>If transplanted, sow seeds initially in seedbeds. Transplant seedlings 2-3 weeks after sowing at a distance of 10 cm between plants and 20 cm between rows. Transplant preferably in the afternoon and water immediately. Mulch with grass clippings or rice straw.</p>
				  </div>

				  <div class="panel-body"><b>Pest and Disease Management:</b>
		  			<p>Apply seedlings with starter solution using urea (46-0-0) at the rate of 2 tbsp/gal of water. Side-dress along the rows at the rate of 1 tbsp/plant one week after transplanting.</p>
				  </div>
				 	<div class="panel-body"><b>Fertilization:</b>
		  			<p>Apply seedlings with starter solution using urea (46-0-0) at the rate of 2 tbsp/gal of water. Side-dress along the rows at the rate of 1 tbsp/plant one week after transplanting.</p>
				  </div>
				  <div class="panel-body"><b>Harvesting:</b>
		  			<p>Harvest as early as three weeks after planting or between 30-40 days after sowing. Harvest preferably in the afternoon to minimize postharvest losses.</p>
				  </div>
				</div>

				<div class="panel panel-default text-left hide" id="detailsFire">
					<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Details</button>
				  <div class="panel-body"><br><b>How Forest Fires Start:</b>
		  			<p>Forest fires always start by one of two ways - naturally caused or human caused. Natural fires are generally started by lightning, with a very small percentage started by spontaneous combustion of dry fuel such as sawdust and leaves. On the other hand, human-caused fires can be due to any number of reasons. 
					</p>
					<p>
		  			Some classifications include smoking, recreation, equipment, and miscellaneous. Human-caused fires constitute the greater percentage of forest fires in our forests, but natural fires constitute the great majority of the total area burned. This is because human-caused fires are usually detected early in their duration, and therefore they are usually contained easily. Natural fires, on the other hand, can burn for hours before being detected by firefighting authorities.</p>
				  </div>

				  <div class="panel-body"><b>How Forest Fires Burn:</b>
		  			<p>There are three elements that are required for a forest fire to burn: Heat, Oxygen, and Fuel. This is the so-called "fire triangle". Without all three of these elements, the fire will go out. Furthermore, the fire will spread in the direction of the most abundant supply of the three elements, while its rate of combustion is usually limited by one of the three elements.</p>
		  			<p>Once the fire enters the combustion stage, there are three main types of classifications for the fire. A smoldering fire is one that emits smoke but no flame and is rarely self-sustained. A fire is classified as flaming combustion when flames are present. Charcoal can be formed in the absence of oxygen with this type of fire. Glowing combustion is a later stage of the fire and is characterized by a slower rate of combustion and blue flame. Forest fires can also be classified by what part of the forest they burn in:</p>
		  			<ul>
		  				<li>Ground fires occur on the ground, often below the leaves. </li>
		  				<li>Surface Fires occur on the surface of the forest up to 1.3 meters high</li>
		  			</ul>
				  </div>

				  <div class="panel-body"><b>Fighting Forest Fires:</b>
		  			<p>Perhaps the most overlooked aspect of fighting forest fires is communication. It is vital that the proper authorities be notified as soon as possible when a fire occurs. Obviously, a fire that is detected in its early stages will be much easier to extinguish than a fire that has been burning for some time but has only just been disovered because of lack of communication. Once a fire has been detected, the fire fighters must be transported to the fire and then apply suppression methods.</p>
				  </div>

				  <div class="panel-body"><b>Transport and Suppression:</b>
		  			<p>One difficulty in fighting forest fires is transporting the firefighters to the fire. Obviously, wildland fires often occur in rather rugged terrain, so fire fighters often have to be transported in by air and then walk with their equipment overland. Once crews are to the fire, the suppression method they use depends on the type of fire. </p>
		  			<ul>
		  				<li>Ground fires are often best controlled by digging trenches in the soil layer.</li>
		  				<li>Portable water backpacks and firebreaks are often the most effective methods at controlling surface fires. </li>
		  				<li>Lastly, if a fire escalates to a crown fire, aerial support is used to suppress the fire with fire retardant chemicals and/or water. However, these fires are often very dangerous and human life always comes first in fire fighting; sometimes these fires are just allowed to burn until they run out of dry fuel.</li>
		  			</ul>
				  </div>
				</div>
			
	</div>


</body>


</html>