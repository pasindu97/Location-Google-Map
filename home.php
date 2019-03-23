<?php 
	$_SESSION['uname'] = 0;
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
	<title>HOME| Garbage</title>
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

		#logright{
			position: absolute;
			top:58px;
			color: white;
			right:40px;
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
		<div id="wallpaper">
			<iframe src="slider/slideshow.html" id="slide" scrolling="no">
				
			</iframe>
			<!--<div id="anime"></div>-->
			<div id="wall">
				<h1 id="header">Welcome to <strong>eco Friends</strong></h1>
				<p id="font2">Eco Friends is a non propitable Organization which associcated with COM (Colombo Municipal Council). This Exercise is to get each and every individual's participation to our own Responsibility. To save the Nature... Make the world better... Save this Earth to Unborn Generations... Your participation for tasks such as poin it out and guide us to strongly polluted locations and join Us buy contacting us to clean up polluted locations are strongly Appriciated. Join with Us and make a Better World. </p>
				
			</div>
			<div id="btn-set">
				<a href="#map-contain">GET STARTED</a>
			</div>

				
		</div>
		<div id="vision">
			<div id="title"><h1 id="header2">Our Vision</h1>
				<p id="font2">For too long, the relationship between prosperity and environment has been seen as a trade-off. Tackling pollution was considered an unwelcome cost on industry and a handicap to economic growth. Our vision is to act Imediate as we can. Cause of that our vision is to,</p><br><br>
				<dl id="font2">
					<li>Provide better Environment to Live</li> 
					<li>Make vibe about "Nececity of saving nature and go-eco concept"amoung community.</li>
				</dl><br><br>
				<p id="font2">And finally make a Better world for Us.</p>
			</div>
		</div>
		<div id="mission">
			<div id="title">
				<h1 id="header2">Our Mission</h1>
				<p id="font2">The mission of Eco Friends is to respond to the combined challenges of pollution and environmental degradation to ensure a sustainable and secure future. We seek solutions through individuals participation, our involvement and your Support. To achieve this mission we should,</p><br><br>
				<dl id="font2">
					<li>Try to get support from Youth Generation to fulfill Tasks</li> 
					<li>Contribute to the cleaning process of polluted locations and prevent further hapenning</li>
					<li>Provide assistance to ones who like to work with Us.</li>
					<li>Promote our ideas in order make a community who supports Us.</li>
				</dl><br><br>
				<p id="font2">Eco Friends community will focus its activities on this critical nexus in the quest for a just, secure and sustainable future for humanity.</p>
			</div></div>
		<div id="map-contain">
		<div id="map"><!--[I can also used Embeded Google map insted of using Google Map API]
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53301.08257643056!2d80.00373415131456!3d6.814587093868555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1540740208220" width="100%" height="450" frameborder="0" style="border:0 background-color: blue" allowfullscreen></iframe>-->
		</div>

		</div>
		
		<!--Content-->

		<div class="markq">

			<marquee>**** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****</marquee>
			
		</div>

		<footer class="foot">
			<div class="footer">
				
				<center><p id="para">copyright:2018 All right reserved | @NSBM<br>|<a href="Admin Login/page_lo.php"><?php if((isset($_SESSION['uname']))&&($_SESSION['level']==4)){ echo "Admin Login";} ?></a> | <a href="">Instructiona and Policies</a> | RSS | <a href="Blog/contact_us.html">Blog</a>|</p></center>

			</div>
		</footer>

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

		function myMap() {

			var myLoc = {lat: 6.8433, lng: 80.0032};

			var mapProp= {
		    	center:new google.maps.LatLng(myLoc),
		    	zoom:13,
			};

			var map=new google.maps.Map(document.getElementById("map"),mapProp);

			

			google.maps.event.addListener(map, 'click', function(event){
				markerAdd({coords:event.latLng,icon:'Icon/mapIcon-sec 50px.png'});
			});
			

			/*
			var marker = new google.maps.Marker({
				position: myLoc,
				map: map,
				title: 'Hell',
				
				
			});

			var maker2 = new google.maps.Marker({
				position: {lat: 6.0, lng: 79.3423},
				map: map,
				title: "Location 34",
				changable: false
			});
			*/

			var arr = [{coords:{lat: 6.8433, lng: 80.0032}, icon:'Icon/flagIcon 50px.png'}, {coords:{lat: 7.8433, lng: 82.0032}}, {coords:{lat: 6.9433, lng: 80.9032}}];

			for (var i = arr.length - 1; i >= 0; i--) {
				markerAdd(arr[i]);
			}

			function markerAdd(props){
				var maker = new google.maps.Marker({
					position: props.coords,
					map: map,
					icon: props.icon
				});
			}

			
			
			
			

			
		}

		


		
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAsJYZSQ92_NQAz9kiSpW1XpyuCxRl_uI&callback=myMap"></script>



</body>
</html>