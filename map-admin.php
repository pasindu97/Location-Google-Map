
<?php
	//header("Location: map-admin.php");
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
	
	include_once 'php/getmarker.php';
	$error = "";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>MAP | Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-spec.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans|Open+Sans+Condensed:300|Raleway|ZCOOL+XiaoWei" rel="stylesheet">
	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
	<style type="text/css">



	</style>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script type="text/javascript">
		var V=0;
		function showP(){
			
			if(V==0) {
				document.getElementById('hiddenPanel').style.display = "block";
				V = 1;
			} else {
				document.getElementById('hiddenPanel').style.display = "none";
				V = 0;
			}
		}

		function showUp(event){
							
							var ob1 = new FileReader();
							var im = document.getElementById('uploadi')
							ob1.onload = function(){
								if(ob1.readyState == 2){
									im.src = ob1.result;
								}
										
							}

							ob1.readAsDataURL(event.target.files[0]);
							
						}
		
	</script>

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
	<div clss="container">
		<center>
			<input id="pac-input" class="controls" type="text" placeholder="Search Box">
		</center>
		
		<div id="map"><!--[I can also used Embeded Google map insted of using Google Map API]
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53301.08257643056!2d80.00373415131456!3d6.814587093868555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1540740208220" width="100%" height="450" frameborder="0" style="border:0 background-color: blue" allowfullscreen></iframe>-->
		</div>

		<div id="panel">
      		<button id="test-btn" onclick="showP()" action="getmarker.php"><p><strong>EXPAND</strong></p></button>    		
    	</div>
    	<div id="hiddenPanel"><iframe  id="hidP"></iframe></div>


		<!--Content-->
		<div  align="center">
			<h1>Submit Locations  <small>Using This Form...</small></h1><br>
			<p class="bg-info" id="whiteP">Enter Your details, if you wish to contact Us.</p>
			<p id="messageBox"><?php echo $error; ?></p>
		</div>
		<div align="center">

			<form action="php/post_marker.php" method="post">
				<table>
					<tr><td><label>Location :</label></td><td width="500px"><input type="text" class="form-control"name="txtL" id="txtL" placeholder="Location Name" ></td></tr>
					<tr><td><label>Lat. :</label></td><td><input type="text" class="form-control"name="txtLat" id="txtLat" placeholder="Lat. ex: 8.3457"></td><td></td></tr>
					<tr><td><label>Lng. :</label></td><td><input type="text" class="form-control"name="txtLng" id="txtLng" placeholder="Lng. ex: 67.3457"></td><td></td></tr>
					<tr><td><label>Description :</label></td><td><textarea class="form-control"name="txtm" placeholder="Add Message"></textarea> </td></tr>
					<tr><td></td><td><center><div id="up"><img src="Icon\upload.png" alt="upload image" id="uploadi" height="150" /></div></center></td></tr>
					<tr><td><lable>Upload a Image:</lable></td><td colspan="2"><center><input class = "btn btn-dark" type="file" id="upFile" name="imageL" onchange="showUp(event)" /><!--<button class="btn btn-dark" id="btn-up" ><img src="Icon/upload1.png" alt="upload" height="30"/><br>UPLOAD</button>Upload your Image. HERE...!--></center></td></tr>
					<tr><td></td><td><button class="btn btn-success btn-lg" id="btn-sub" name="submit">SUBMIT</button></td></tr>

				</table>
			</form>

			
			<br><br>

			<table border="1" id="Locator" class="table table-dark table-striped">
				<tr><th >Location</th><th>Latitude</th><th >Longitude</th></tr>
				<tr><td>Homagam</td><td>6.8433</td><td>80.0032</td></tr>
				<tr><td>Nuwara Eliya</td><td>6.9497</td><td>80.7891</td></tr>
				<tr><td>Kandy</td><td>7.2906</td><td>80.6337</td></tr>
				<tr><td>Trincomalee</td><td>8.5874</td><td>81.2152</td></tr>

			</table>

		</div>
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
		<div id="footer">
			
			
		</div>





</div>


	</div>

	<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <input name="id" type='hidden' id='id'/>
            <td><a>Description:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
        <tr>
            <td><b>Confirm Location ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>

	<script>
		//var marker;
		//initializing a map using a function

		function myMap() {
				


			//------------------[Initialize a Map]----------------------------------------//

			//give some coords. as variable
			var myLoc = {lat: 6.8433, lng: 80.0032};

			var mapProp= {
		    	center:new google.maps.LatLng(myLoc),
		    	zoom:13,
			};

		
			//creating map obejct using previously declared values (mapProp, myLoc)
			var map=new google.maps.Map(document.getElementById("map"),mapProp);

			//create default bound for map[Not Working] 
			var slbound = new google.maps.LatLngBounds(
				new google.maps.LatLng(8.774432,80.0120005),
				new google.maps.LatLng(7.481507,78.9197681));
			var option = {bounds: slbound};

			//------------------[Marker Information settings]----------------------------------//

			//create information window
			var inform = new google.maps.InfoWindow({
				content: '<h6>Select a Location</h6>'
			});

			//main information draft created for Infowindow
			var mDraft = '<div id="Banner">'+'<div id="topB">'+'<h6><b>'+'Place 1 test 1'+'</b></h6><br><img src="test.jpg" alt="location" styles="position:absolute; float:right"/>'+'<p>'+'Test Location Test Location Test Location Test Location'+'</p>';


			var mDraft2 = '<div id="iw-container">' +
                    '<div class="iw-title">Main Headquarter</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">NSBM Green University</div>' +
                      '<img height:50 src="image/loc2.jpg" height="115" >' +
                      '<p>The National School of Business Management (Sinhalese: ජාතික ව්‍යාපාර කළමනාකාරීත්ව විද්‍යායතනය, translit. Jāthika Wyāpāra Kaḷamanākārīthwa Vidyāyatanaya, Tamil: தேசிய வியாபார முகாமைத்துவ பாடசாலை) (also known as NSBM Green University, Sinhalese: NSBM හරිත විශ්වවිද්‍යාලය, translit. NSBM Haritha Wishwawidyālaya, Tamil: NSBM பசுமை பல்கலைக்கழகம்) is a private [2] degree awarding institute[3] in Sri Lanka, established under Companies Act No. 07 of 2007 and having company number PB 4833 and also it is the first ever green university in South Asia[3] specialising in Computer sciences, Business, Engineering and Technology.[4] It is recognized as a degree awarding institute on 19 January 2016[5] under section 25A of the Universities Act No. 16 of 1978 by Ministry of Higher Education.</p>' +
                      '<div class="iw-subTitle">Contacts</div>' +
                      '<p>Address: 309 Dampe - Pitipana Rd, කොළඹ<br>'+
                      '<br>Phone:  011 544 5000<br>e-mail: inquiries@nsbm.lk<br>Website: www.nsbm.lk</p>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>';


			//--[Marker Information settings wich can embed details from Google map API libries]-//

			var inform2 = new google.maps.InfoWindow({
				content: 'inform-content2',
				shadowStyle: 1,
				padding: 0,
				borderRadius: 14
			});

			//------------------[Pass location Latlng to the Form]-----------------------------//
			var marker;
			function addDragableM(){
				//create Dragable marker
				marker = new google.maps.Marker({
					position: {lat: 6.8535, lng: 80.0042},
					map: map,
					title: 'Select Location',
					icon: 'Icon/markers/marker-red45px.png',
					content: "<h2>Select Location</h2>",
					animation: google.maps.Animation.DROP,
					draggable: true


				});


				function toggleBounce() {
			        if (marker.getAnimation() !== null) {
			          marker.setAnimation(null);
			        } else {
			          marker.setAnimation(google.maps.Animation.BOUNCE);
			        }
			      }


				marker.addListener('click', toggleBounce);

				google.maps.event.addListener(marker,'dragend', function(){
				if(confirm("If you wanna Confirm this location press OK, otherwise press CANCEL.")){
						//console.log(marker.getPosition().lat());
					marker.setIcon("Icon/markers/marker-yellow45px.png");
					inform.setContent("<div id='Banner2'><strong>Your Location has been setted</strong><br><h6>Waiting for Confirm</h6></div>");
					inform.open(map,marker);
					marker.setAnimation(null);
					marker.setOptions({draggable: false});
					//map.setPosition( marker.getCenter());
					document.getElementById('txtLat').value = this.getPosition().lat();
					document.getElementById('txtLng').value = this.getPosition().lng();
					var lat = document.getElementById('txtLat').value;
					var lng = document.getElementById('txtLng').value;
					//$('#lat') = lat;
					//$('#lng') = lng;
					if(confirm("Do you want to add Another location. Click OK ")){
						addDragableM();

					} else return;
				} else {
					return;
				}
				

			});



			};
			addDragableM();

			//------------------[Get Users Marked Markers]------------------------------------//
			var markerUser;
			var locUsers = <?php get_all_locations() ?>;
			function userMarker(){
				for (var i = locUsers.length - 1; i >= 0; i--) {
					//window.alert("Number is "+ parseInt(locUsers[i][2]));
					markerUser = new google.maps.Marker({
						position: {lat: parseFloat(locUsers[i][1]), lng: parseFloat(locUsers[i][2])},
						map: map,
						animation: google.maps.Animation.DROP,
						icon: locUsers[i][5] === '1' ? 'Icon/markers/markergreen45px.png' : 'Icon/markers/marker-yellow45px.png',
						title: locUsers[i][3],
						html: document.getElementById('form')					
					});
					google.maps.event.addListener(markerUser, 'click', (function(markerUser, i) {
		                return function() {
		                    confirmed =  locUsers[i][5] === '1' ?  'checked'  :  0;
		                    $("#confirmed").prop(confirmed,locUsers[i][5]);
		                    $("#id").val(locUsers[i][0]);
		                    $("#description").val(locUsers[i][4]);
		                    $("#form").show();


		                    inform2.setContent('<div id="iw-container">' +
                    '<div class="iw-title"><strong>'+locUsers[i][3]+'</strong></div>' +
                    '<div class="iw-content">' +
                      '<p">'+locUsers[i][4]+'</p><img src="Icon/Photo-icon.png" alt ="location" height="120"/><br>'+'</div>');
		                    inform2.open(map, markerUser);		    
		                }
		            })(markerUser, i));
					
					
				}
				

			}


			userMarker();
			

			var n = 0;
			var bal = null;
			function addGen(){
				//window.alert("Number is "+ n);
					//window.alert("Number is "+ K);
					document.getElementById('hiddenPanel').style.backgroundColor = "#dfe6e9";
					bal = document.getElementById('hiddenPanel').innerHTML = '<div id="iw-container">' +
                    '<div class="iw-title"><strong>'+locUsers[n][3]+'</strong></div>' +
                    '<div class="iw-content">' +
                      '<p">'+locUsers[n][4]+'</p><img src="Icon/Photo-icon.png" alt ="location" height="120"/><br><center><table><tr><td><input type="hidden" value = "'+parseInt(locUsers[n][0])+'" name="ID"></td></tr><tr><td><button id="btnsub" name="submit2" class="btn btn-success" >SHOW</button></td><td><button id="cancel" name="dec" class="btn btn-danger" onclick="addGen(n+1)">NEXT</button></td></tr></table></center>'+'</div>';

                      //bal.style.display = 'block';
                      n++;
                      if(n==locUsers.length-1){n=0}
                      setTimeout(addGen,5000);	
			}

			addGen();


			


			


			//------------------[Search Box for locate Places]--------------------------------//

			// Create the search box and link it to the UI element.
	        var input = document.getElementById('pac-input');
	        var locatorM = new google.maps.places.SearchBox(input);
	        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

	        // Bias the SearchBox results towards current map's viewport.
	        map.addListener('bounds_changed', function() {
	          locatorM.setBounds(map.getBounds());
	        });

	        var markers = [];
	        // Listen for the event fired when the user selects a prediction and retrieve
	        // more details for that place.
	        locatorM.addListener('places_changed', function() {
	          var places = locatorM.getPlaces();

	          if (places.length == 0) {
	            return;
	          }

	          // Clear out the old markers.
	          markers.forEach(function(marker) {
	            marker.setMap(null);
	          });
	          markers = [];

	          // For each place, get the icon, name and location.
	          var bounds = new google.maps.LatLngBounds();
	          places.forEach(function(place) {
	            if (!place.geometry) {
	              console.log("Returned place contains no geometry");
	              return;
	            }
	            var icon = {
	              url: place.icon,
	              size: new google.maps.Size(71, 71),
	              origin: new google.maps.Point(0, 0),
	              anchor: new google.maps.Point(17, 34),
	              scaledSize: new google.maps.Size(25, 25)
	            };

	            // Create a marker for each place.
	            markers.push(new google.maps.Marker({
	              map: map,
	              icon: icon,
	              title: place.name,
	              position: place.geometry.location
	            }));

	            if (place.geometry.viewport) {
	              // Only geocodes have viewport.
	              bounds.union(place.geometry.viewport);
	            } else {
	              bounds.extend(place.geometry.location);
	            }
	          });
	          map.fitBounds(bounds);
	        });

	        //----------------------------------------[Custom location details viewer]---------[Not Working Correctly]-------------------//
	        

			var service = new google.maps.places.PlacesService(map);

			service.getDetails({
				placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
			}, function(place, status){
				if(status=== google.maps.places.PlacesServiceStatus.OK){
					var marker2 = new google.maps.Marker({
						map: map,
						position: {lat: 7.8433, lng: 80.0032},
						draggable: true
					});
					google.maps.event.addListener(marker2,'click', function(){
						inform2.setContent('<div><strong>' + place.name +'<strong><br>'+'Place ID:'+place.placeId + '<br>' + place.formated_address + '</div>');
						inform2.open(map, this);
					});
				}
			});



			//As Extra >> when you click on a record it will add relevent details to the form... still need some developments to add to the map...
			var value = document.getElementById('Locator'),rIndex;
			for (var i = value.rows.length - 1; i >= 0; i--) {
				value.rows[i].onclick = function(){
					rIndex = this.rowIndex;
					console.log(rIndex);
					document.getElementById('txtL').value = this.cells[0].innerHTML;
					document.getElementById('txtLat').value = this.cells[1].innerHTML;
					document.getElementById('txtLng').value = this.cells[2].innerHTML;


					/*google.maps.event.addListener('btn-sub','click', function(event){
						markerAdd(coords:{document.getElementById('txtLat').value, document.getElementById('txtLng').value })
					}); */

					//markerAdd(coords:{this.cells[1].innerHTML, this.cells[2].innerHTML});
					//markerAdd({coords:{this.cells[1].innerHTML, this.cells[2].innerHTML},icon:'Icon/mapIcon-sec 50px.png'});
				};
			}
			//Adding listner to get coords.(Lat-Lang) when click any point in the map
			var count = 0;
			google.maps.event.addListener(map, 'click', function(event){
				count += 1;
				markerAdd({coords:event.latLng,icon:'Icon/markers/marker-purple45px.png', content: '<b>Custom Location </b>'+ count});


			});


			

			google.maps.event.addListener(marker, 'click', function() {
				inform.open(map,marker);
			});


			/*
			var marker2 = new google.maps.Marker({
				position: {lat: 6.0, lng: 79.3423},
				map: map,
				title: "Location 34",
				changable: false
			});

			marker2.addListener('click', function(){
				inform.open(map,marker2);
			});
			*/

			//Declare an array inorder to add multiple locations
			var arr = [{coords:{lat: 6.8433, lng: 80.0032}, icon:'Icon/flagIcon 50px.png', content: mDraft2}];

			for (var i = arr.length - 1; i >= 0; i--) {
				markerAdd(arr[i]);
			}


			


			//Sub function use to create Makers
			function markerAdd(props){
				var maker = new google.maps.Marker({
					position: props.coords,
					map: map,
					icon: props.icon
				});
				//console.log(maker.getPosition().lat());
				if(props.content){
					var inform = new google.maps.InfoWindow({
						content: props.content
					});

					maker.addListener('click', function(){
						inform.open(map,maker);
					});

				}else if(props.content==""){
					var inform = new google.maps.InfoWindow({
						content: "Location A"
					});

					maker.addListener('click', function(){
						inform.open(map,maker);
					});



					

				}
			}






		}

		/*
		var value = document.getElementById('Locator'),rIndex;
		for (var i = value.rows.length - 1; i >= 0; i--) {
			value.rows[i].onclick = function(){
				rIndex = this.rowIndex;
				console.log(rIndex);
				document.getElementById('txtL').value = this.cells[0].innerHTML;
				document.getElementById('txtLat').value = this.cells[1].innerHTML;
				document.getElementById('txtLng').value = this.cells[2].innerHTML;
				//markerAdd(coords:{this.cells[1].innerHTML, this.cells[2].innerHTML});
				//markerAdd({coords:{this.cells[1].innerHTML, this.cells[2].innerHTML},icon:'Icon/mapIcon-sec 50px.png'});
			};
		}
		*/

		//google.maps.event.addDomListener(window,'load',myMap);


	</script>

	
	
	<!--Created API link with generted key-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAsJYZSQ92_NQAz9kiSpW1XpyuCxRl_uI&libraries=places&callback=myMap"></script>-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAsJYZSQ92_NQAz9kiSpW1XpyuCxRl_uI&libraries=places&language=si&region=SL&callback=myMap"></script>

</body>
</html>
