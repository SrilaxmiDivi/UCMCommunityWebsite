<!DOCTYPE html>

<html>
	<head>
		<title>UCM Indian Community</title>
		<meta charset="utf-8">
		<!-- <script src="UCMIndianCommunity.js"></script>  -->
		<style type="text/css">
			/* body {margin: 30px;} */
			
			/* Style the tab */
			.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #9EF2EC;
				}
			/* Style the buttons inside the tab */
			.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
				}
			
			/* Change the background color of buttons on hover */			
			.tab button:hover {
			background-color: #A6AEAD;
				}
				
			.tab button.active {
			background-color: #ccc;
				}
				
			/* Style the tab content */
			.tabcontent {
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
				}   
				
		* {
        text-align:center;
		}
    
		body {
			background-image: radial-gradient(circle farthest-corner at center, #FFFFFF 0%, #00A3EF 0%);
			color:black;
			width:900px;
			margin:0 auto;
			}

		</style>
	
	</head>
	<body>
	<p>Click on the below tabs to continue</p>
	<div class="tab">
		<button class="tablinks" id ="HomeButton" value="Home">Home</button>
		<button class="tablinks" onclick="displayRooms()" id="RoomButton" value="RoomSearch" >RoomSearch</button>
		<button class="tablinks" id="RidesButton" value="Rides">Rides</button>
		<button class="tablinks" id="ContactButton" value="Contact">Contact</button>		
	</div>
	<p id="HomeBody" </p>
	<p id="ContactBody" </p>
	<p id="Rooms" </p>
	
	<script>
		function displayRooms(){
			var post = " <br> <button id=\"postRoom\" >Post New Room availability</button> &nbsp &nbsp " ;
			var get = " <button id=\"getRoom\" >Get available Room Details</button> " ;
			document.getElementById("Rooms").innerHTML = post + get;
			
			document.getElementById("postRoom").addEventListener("click", postRoomFunction, false);
			document.getElementById("getRoom").addEventListener("click", getRoomFunction, false);
			
			function postRoomFunction(){
				var name = "Full Name <br> <input type=\"text\" id=\"namebox\" ></input> <br> <br> ";
				var email = "Email <br> <input type=\"text\" id=\"emailbox\" ></input> <br> <br> ";
				var phone = "Phone <br> <input type=\"text\" id=\"phonebox\" ></input> <br> <br> ";
				var description = "Room Details <br> <textarea id= \"inputtextarea\" rows=\"5\" cols=\"60\"></textarea>  <br> <br> ";
				var submitbutton = " <button id =\"PostSubmitButton\" value=\"Submit\">Submit</button> " ;
				document.getElementById("Rooms").innerHTML = name + email + phone + description + submitbutton;

				document.getElementById("PostSubmitButton").addEventListener("click", postroomdb, false);
			 
			function postroomdb(){
				
				name = document.getElementById("namebox").value;
				email = document.getElementById("namebox").value;
				phone = document.getElementById("phonebox").value;
				description = document.getElementById("inputtextarea").value;
				
				
				/*
					<?php
						$dbServername = "localhost";
						$dbUsername = "root";
						$dbPassword = "";
						$dbName = "phptestdb";
			
						$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
		
						$sql = "INSERT INTO users (name, email, phone, description) VALUES
						('Priya', 'abcd@gmail.com', '4564757', 'test12345');";
		
						mysqli_query($conn, $sql);
				?>
                  */
				
				
				//document.getElementById("Rooms").innerHTML = "Successfully saved data!"
			}
			
			 
			}
			function getRoomFunction(){
			//document.getElementById("Rooms").innerHTML = "hello";	
			}
			
		}
		
		
	</script>
	</body>
</html>
