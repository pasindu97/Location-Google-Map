
<?php
	//echo "Hiii";
	$error="";
	if(isset($_POST['submit'])){
		$loc = $_POST['txtL'];
		$lat = $_POST['txtLat'];
		$lng = $_POST['txtLng'];
		$des = $_POST['txtm'];
		$img = $_POST['imageL'];

		$con = new mysqli("localhost","root","", "geo_locator");

		//if($loc == )

		if($con->connect_error){
		    die("Connection Failed");
		  }
		  $error = "Connection Successful";
		  $query1 = "Insert into user_passedGeo(name, latitude, longitude, description, locImage) values('$loc','$lat','$lng','$des','$img')";

		  if ($con->query($query1) === TRUE) {
		    $error = "New record created successfully";
		} else {
		    $error = "Error: " . $query1 . "<br>" . $con->error;

		}

	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>MAP | User</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-spec.css">
	<style type="text/css">

	


	</style>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>

	<script>
		function showP() {
			document.getElementById('hidP').show
		}
	</script>

</head>
<body>
	<!--Navigation Bar-->
	<nav class="navbar navbar-expand-sm navbbar-light bg-dark" style="position: relative;">
		<a href="#" class="navbar-brand" id="brandN">Hackish</a>

		<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-scroll"><span class="navbar-toggler-icon"></span></button>

		<div class="collapse navbar-collapse" id="nav-scroll">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="nav-link">Home</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">Items</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">Contact Us</a>
				</li>
			</ul>
		</div>

	</nav>




	<!--Which use to contain Google Map-->
	<div clss="container">
		<input id="pac-input" class="controls" type="text" placeholder="Search Box">
		<div id="map"><!--[I can also used Embeded Google map insted of using Google Map API]
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53301.08257643056!2d80.00373415131456!3d6.814587093868555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1540740208220" width="100%" height="450" frameborder="0" style="border:0 background-color: blue" allowfullscreen></iframe>-->
		</div>
		
		<div id="panel">
      		<button id="test-btn" onclick="showP()"><p><strong>EXPAND</strong></p></button>    		
    	</div>
    	<div id="hiddenPanel"><iframe id="hidP"></iframe></div>


		<!--Content-->
		<div class = "content" align="center">
			<h1>Submit Locations  <small>Using This Form...</small></h1><br>
			<p class="bg-info" id="whiteP">Enter Your details, if you wish to contact Us.</p>
			<p id="messageBox"><?php echo $error; ?></p>
		</div>
		<div align="center">

			<form action="contact.php" method="post">
				<table>
					<tr><td><label>Location :</label></td><td width="500px"><input type="text" class="form-control"name="txtL" id="txtL" placeholder="Location Name" ></td></tr>
					<tr><td><label>Lat. :</label></td><td><input type="text" class="form-control"name="txtLat" id="txtLat" placeholder="Lat. ex: 8.3457"></td><td></td></tr>
					<tr><td><label>Lng. :</label></td><td><input type="text" class="form-control"name="txtLng" id="txtLng" placeholder="Lng. ex: 67.3457"></td><td></td></tr>
					<tr><td><label>Description :</label></td><td><textarea class="form-control"name="txtm" placeholder="Add Message"></textarea> </td></tr>
					<tr><td><lable>Upload a Image:</lable></td><td colspan="2"><center><input class = "btn btn-dark" type="file" id="upFile" name="imageL"/><!--<button class="btn btn-dark" id="btn-up" ><img src="Icon/upload1.png" alt="upload" height="30"/><br>UPLOAD</button>Upload your Image. HERE...!--></center></td></tr>
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


			//--[Marker Information settings wich can embed details from Google map API libries]-//

			var inform2 = new google.maps.InfoWindow({
				content: 'inform-content2'
			});

			//------------------[Pass location Latlng to the Form]-----------------------------//
			var marker;
			function addDragableM(){
				//create Dragable marker
				marker = new google.maps.Marker({
					position: {lat: 6.8535, lng: 80.0042},
					map: map,
					title: 'Select Location',
					content: "<h2>Selected Location</h2>",
					draggable: true,
					animation: google.maps.Animation.DROP


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
					marker.setIcon("Icon/cust_markerI.png");
					inform.setContent("<div id='Banner2'><strong>Your Location has been setted</strong><br><h6>Waiting for Confirm</h6></div>");
					inform.open(map,marker);
					marker.setAnimation(false);
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
			
			//window.alert("Fuck");
			//console.log(marker.getPosition().lat());

			


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
				markerAdd({coords:event.latLng,icon:'Icon/mapIcon-sec 50px.png', content: '<b>Custom Location </b>'+ count});


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
			var arr = [{coords:{lat: 6.8433, lng: 80.0032}, icon:'Icon/flagIcon 50px.png', content:'<div id="aAPI-ban"><b>Main Headquarter</b><br><p>Filler Text... </p><img height:50 src="image/loc2.jpg" height=150/></div>'}, {coords:{lat: 6.9497, lng: 80.7891}, content: mDraft}, {coords:{lat: 7.2906, lng: 80.6337}}, {coords:{lat: 8.5874, lng: 81.2152}}];

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
