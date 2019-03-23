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
	

	include_once 'php/pass_comment.php';
	if(isset($_GET['logout'])){
		$_SESSION = array();
		session_destroy();
	}
 ?>


<!DOCTYPE html>

<html>
<head>
	<title>Articles| 02</title>
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

		form label {
			border-radius: 10px;
		} 

	</style>
	<script type="text/javascript">
		//var locUsers = <?php pass_com() ?>;
		//			for (var i = locUsers.length - 1; i >= 0; i--) {
		//				document.getElementById('wall2').innerHTML = '<h1>Blah Blah</h1>';

		//			}

	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body onload="usercom()">
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
		<div id="login"><a href="#"><ion-icon name="contacts"></ion-icon> -- Login Here</a></div>
		</div>
	</nav>

	


	<!--Which use to contain Google Map-->
	<div clss="container" id="main">
		<div id="wallpaper2" style="background-color: white;">
			<div id="wall2">
				<h1 id="articleT">FIVE POSITIVE NEWS STORIES</h1>
				<h5> by Admin</h5><br><br>
				<h3>The threat of climate change and environmental degradation is real.
But there's still room for optimism.</h3><br><br>
				<p>Constructive activity, at this moment, is our most obvious opportunity to moderate the risk to individuals and creatures all around the planet. As indicated by an UN Emissions report, empowering idealism is basic on the off chance that we are to accomplish long haul objectives around emanation decrease by 2020. 

Here are five uplifting news anecdotes about natural activity from around the globe to get you started up and feeling bright about the positive activities people can have.</p>
<h2>1.WE’RE SAYING ‘SEE YOU’ TO SINGLE USE PLASTICS.</h2>
	<p>The counter plastic unrest is a-go. We're altogether tired of the rising tide of non-biodegradable plastics flooding our seas. Ground-breaking pictures of plastic islands and obliterating documentaries, for example, Blue Planet 2 are bringing issues to light and affecting activity. What's more, industry and administrators are reacting. An expense on plastic sacks in the UK has seen their utilization fall by 85%. In nations like Papua New Guinea and Kenya they have been prohibited totally. In the UK, talks are in progress to boycott plastic straws, cotton buds and present an arrival store conspire for plastic jugs, something that has been a colossal achievement in Norway. With new innovation, for example, counterfeit saran wrap produced using green growth, superfluous plastic could before long be a relic of days gone by. 

What's more, about time, as well.</p>
<h2>2.SAVING THE HUMBLE, BUT MIGHTY, BEE.</h2>
	<p>TheThe European Union has concurred an aggregate restriction on the world's most broadly utilized bug sprays from all fields in the following a half year and we're humming that the little folks will have a battling shot. Honey bee numbers have been on the relentless decay as of late. On account of an absence of plant assorted variety, substantial pesticide use in current cultivating and gardens being cleared over, many are appropriately stressed over the eventual fate of the unassuming honey bee. Neonicotinoids, in like manner bug sprays, go about as hurtful nerve operators, murdering singular honey bees and decreasing ruler numbers. against plastic transformation is a-go. We're altogether tired of the rising tide of non-biodegradable plastics flooding our seas. Ground-breaking pictures of plastic islands and crushing documentaries, for example, Blue Planet 2 are bringing issues to light and affecting activity. Furthermore, industry and lawmakers are reacting. An expense on plastic sacks in the UK has seen their utilization fall by 85%. In nations like Papua New Guinea and Kenya they have been restricted totally. In the UK, talks are in progress to boycott plastic straws, cotton buds and present an arrival store conspire for plastic containers, something that has been an immense achievement in Norway. With new innovation, for example, counterfeit saran wrap produced using green growth, superfluous plastic could before long be a relic of days gone by. 

What's more, about time, as well.</p>
<h2>3.GOODBYE COAL. HELLO CLEAN FUEL.</h2>
	<p>England crushed its record for running without coal as of late. Calls for increasingly sunlight based and wind control – the least expensive and cleanest vitality sources have put weight on governments and organizations alike. With petroleum derivative use due to be eliminated by 2025, we're en route to a sans coal Britain. In spite of the fact that gas still makes up a huge level of vitality fuel, the pervasiveness of renewables is developing and developing. Being so dependent on renewables would have appeared like a science fiction film 20 years prior, however it's not the future any longer, it's currently.</p>
<h2>4.OUT OF THE RED. INTO THE GREEN.</h2>
	<p>With regards to proceeded with species misfortune, positive thinking is vital. Despite the fact that the IUCN red rundown features compromised and jeopardized species, there is a Green List seemingly within easy reach. Boosting positive preservation activities and projects is the real center, empowering and advancing fruitful protection stories. Also, the 'IUCN Green List of Species' intends to supplement the IUCN Red List by giving an instrument to surveying the recuperation of species' populaces and estimating their preservation achievement. Focussing on preservation good faith intends to endeavor to recoup species to sound dimensions long haul. Not simply 'spare them' from going wiped out.</p>
<h2>5.YOU'RE KEEPING CARBON LOCKED IN.</h2>
<p>This late spring, more supporters than any time in recent memory are making standard gifts to Cool Earth. From supporting a solitary tree to a section of land of a portion of the world's most in danger rainforest, our supporters have joined to make this positive advance. Progressively worried by news of rainforest misfortune causing temperature increment, and biodiversity progressively undermined, people are standing firm against environmental change. One section of land of rainforest standing is proportionate to keeping 260 tons of carbon from going up in smoke. Truth be told, securing one section of land of rainforest with Cool Earth is so effective, you'd need to reuse two million aluminum jars to have a similar effect.</p>	
				
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
			<div id = "com"></div>
			<!--<script type="text/javascript">
				
				function usercom(){
					var locUsers = <?php pass_com() ?>;
					for (var i = locUsers.length - 1; i >= 0; i--) {
						document.getElementById('wall2').innerHTML = '<h1>Blah Blah</h1>';

					}
				}

			</script>-->
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
			<form action="php/comment.php" method="post">
				<table>
					<tr><td><label>Full Name :</label></td><td width="500px"><input type="text" class="form-control"name="txtfn" placeholder="Full Name" ></td></tr>
					<tr><td><label>Email :</label></td><td><input type="text" class="form-control"name="txtem" placeholder="Email"></td><td></td></tr>
					<tr><td><label>Message :</label></td><td><textarea class="form-control"name="txtem" placeholder="Add Message"></textarea> </td></tr>
					<tr><td></td><td><button class="btn btn-success">SUBMIT</button></td></tr>
					
				</table>
			</form>
		</div>


		</div>
		<div id="footer">
			
			
		</div>





</div>

</div>


	

	
	



</body>
</html>
