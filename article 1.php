<?php 
	//$_SESSION['uname'] = 0;
	session_start();

	if(isset($_SESSION['uname'])){
			$url=null;
			switch ($_SESSION['level']) {
				case 4:
					$url ="map-admin.php";
					break;
				case 3:
					$url ="map-gcap.php";
					break;
				case 2:
					$url ="map-gco.php";
					break;
				case 1:
					$url ="map-users.php";
					break;
				default:
					$url = "map-visit.php";
					break;
			}

		}
	


	if(isset($_GET['logout'])){
		$_SESSION = array();
		session_destroy();
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Articles| 01</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans|Open+Sans+Condensed:300|Raleway|ZCOOL+XiaoWei" rel="stylesheet">
	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
	<style type="text/css">
		#map {
			height: 100%;
			width:100%;
			padding: 0px;
			


		}

		small {
			font-size: 15px;
			color:#00f8;
		}

		form table tr td {
			height: 50px;
		}

		nav a {
			color: white;
		}

		#brandN {
			font-weight: bolder;
			
		}

	</style>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
	<!--Navigation Bar-->
	<nav class="navBar  " style="position: relative;">
		<a href="home.php" class="navbar-brand" id="brandN"><img src="Icon/Web-site Logo V4.png" height=80 alt="slEcoFriends"/></a>

		<div class="navA">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a href=<?php if(isset($_SESSION['uname'])){echo $url;} else echo "map-visit.php" ;?> class="nav-link">Map</a>
				</li>

				<li class="nav-item">
					<a href="programs.php" class="nav-link">Programs</a>
				</li>

				<li class="nav-item">
					<a href="article 1.php" class="nav-link">Articles</a>
				</li>

				<li class="nav-item">
					<a href="contactUs.php" class="nav-link">Contact Us</a>
				</li>

				<li class="nav-item">
					<a href="aboutUs.php" class="nav-link">About Us</a>
				</li>
			</ul>
		</div>
		<div id="login"><a href="Login/login.php"><ion-icon name="contacts"></ion-icon> -- <?php if(isset($_SESSION['uname'])){
			echo "{$_SESSION['uname']}";} else echo 'Login Here';?></a></div><a id ="logright" name="logout" href="home.php?logout=1">LOGOUT</a> 
		</div>
	</nav>

	


	<!--Which use to contain Google Map-->
	<div clss="container" id="main">
		<div id="wallpaper2" style="background-color: white;">
			<div id="wall2">
				<h1 id="articleT">ENVIRONMENT, LIKE HUMANS, REQUIRE A BALANCED DIET</h1>
				<h5> by Admin</h5><br><br>
				<p>The world's forests are on a fast food diet of carbon dioxide, which is currently causing them to grow faster. But a researcher at West Virginia University, along with an international team of scientists, finds evidence suggesting that forest growth may soon peak as the trees deplete nitrogen in the soil over longer growing seasons.</p>

	<p>West Virginia's wildlands are a "canary in the coal mine for climate change" because of the forests' biodiversity, which, along with rich soils and abundant rainfall, make them among the strongest forests globally, according to Brenden McNeil, an associate professor of geography at WVU's Eberly College of Arts and Sciences. The state's forests have been resilient to a barrage of logging and acid rain in the 19th and 20th centuries but are now exhibiting symptoms of declining health because of climate change.</p>
	<p>Trees, like humans, need to have more than one thing in their diets, McNeil said. And the proliferation of carbon dioxide is force-feeding them the one thing they use most. McNeil said the challenge is to restore a balanced diet for forests by severely cutting back or ending altogether the use of fossil fuels.</p>
	<p>"There's more carbon dioxide in the atmosphere, and that's the raw material that trees need to convert to sugar, which they use to grow," he said. "What is profound is that as all the plants grow faster; they're slowing down climate change." But, as he explained, "the plants of the world can't do that forever."</p>
	<p>In a paper published in Nature Ecology and Evolution, McNeil and nearly 40 international researchers suggest that most terrestrial ecosystems are seeing declining nitrogen isotopes in foliage on a global scale. It adds global support to a 2017 paper where McNeil was part of another team that used nitrogen isotopes in tree rings to find evidence for declining nitrogen in forests across the United States. Most of the world is still "greening" in response to climate change, but diminishing nitrogen means future growth will become unhealthier and out of balance, and trees will need to work harder to extract the nitrogen, McNeil continued.</p>
	<p>His ongoing work, conducted with a team of WVU Honors College undergraduate students, graduate students, as well as Edward Brzostek in the Department of Biology, and Nicolas Zegre in the Davis College of Agriculture, Natural Resources and Design, is examining the responses of West Virginia forests to climate change.

	In an area the size of about six football fields in the Summit Bechtel Reserve Scout Camp, this research team is taking an enormous tree census. Scouts also work on measuring the trees in this "citizen-scientist" project focused on mapping 15,000 trees relative to a completed GPS survey grid. This census will provide a baseline for long-term study of tree growth in a changed climate.

Cameras in the tree canopy, millions of laser beams probing the trees' structure and satellite imagery are also helping McNeil and the research team understand how a forest can sustain productivity and how different species adapt to decreased nitrogen and increased carbon dioxide. The team measures everything from the angles of leaves to the breadth and depth of a tree's roots to water and nutrient availability.</p>
<p>All these efforts measuring forests seek to answer a key question: For how long will forests slow down climate change, and help us avoid the coming costs of adapting to a more chaotic climate?

"It's going to cost us a lot more if we do not change now," he said. "As described by the recent Fourth National Climate Assessment, increasing carbon dioxide in the atmosphere is changing our global climate in ways that are costly to our economy."

McNeil said making comparatively small investments to reduce dependence on fossil fuels is akin to paying life insurance premiums. The result of not making the investments now will be the risk of losing the stability of the natural systems that we rely on for food, water and protection against diseases and extreme weather events.

Although McNeil's and the other researchers' predictions sound dire, he believes the planet and humanity will continue to exist, but in a much-changed world both ecologically and economically.

He said as the world turns from fossil fuels to more environmentally friendly sources of energy like solar and wind, the cost-benefit ratio will improve.

"The solutions are here," McNeil said. "It just takes the will to enact them."</p>

			<div id ="next"><a href="article 2.php">NEXT</a></div>
				
			</div>

			<div id="wall2">
				<h5>Comments</h5>
				<form action="php/comment_pass.php" method = "post">

					<table id="table2">
					<tr><td><label>Enter Your Comment:</label></td></tr><tr><td><textarea id="com" rows="5" name="mes"></textarea></td></tr>

					<tr><td><input class="btn-success" type="submit" name="comment" value="ADD A COMMENT"></td></tr>
				</table>
				</form>
				
			</div>
			<div class="markq">

			<marquee>**** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****</marquee>
			
		</div>
		<footer class="foot">
			<div class="footer">
				
				<center><p id="para">copyright:2018 All right reserved | @NSBM<br>|<a href="Admin Login/page_lo.php"><?php if((isset($_SESSION['uname']))&&($_SESSION['level']==4)){ echo "Admin Login";} ?></a> | <a href="">Instructiona and Policies</a> | RSS | <a href="Blog/contact_us.html">Blog</a>|</p></center>

			</div>
		</footer>
			

				
		</div>

		
		
		<!--Content-->

		

		<div class="all">

			<div id="warn">
				<div class="imageDust">
		
					<img src="resy.png" height="220px">

						</div>

						<div id="resy">
							
							<h4>Please follow these steps!</h4>
							<li>
								click your location using google map.

							</li>
							<li>
								take a snapshot and upload a picture .
							</li>
							<li>
								if you like to give some advice please fill our form and submit ...
							</li>
						</div>

			 </div>
			
		
		<div class="form">
		<div align="center">
			<form>
				<table>
					<tr><td><label>Full Name :</label></td><td width="500px"><input type="text" class="form-control"name="txtfn" placeholder="Full Name" ></td></tr>
					<tr><td><label>Email :</label></td><td><input type="text" class="form-control"name="txtem" placeholder="Email"></td><td></td></tr>
					<tr><td><label>Message :</label></td><td><textarea class="form-control"name="txtem" placeholder="Add Message"></textarea> </td></tr>
					<tr><td></td><td><button class="btn btn-success">SUBMIT</button></td></tr>
					
				</table>
			</form>
		</div>


		</div>
		




</div>

</div>


	

	<script>
		
	</script>

	



</body>
</html>