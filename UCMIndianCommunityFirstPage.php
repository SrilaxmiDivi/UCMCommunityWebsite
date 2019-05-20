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
	
	<form action="UCMIndianCommunityFirstPage.php" method="POST">
	<div class="tab">
		<button name ="HomeButton" value="Home">Home</button>
		<button name="RoomButton" value="RoomSearch" >RoomSearch</button>
		<button name="RidesButton" value="Rides">Rides</button>
		<button name="ContactButton" value="Contact">Contact</button>	
	</div>
	</form>
	
		<?php
			//Include the logic page in the form page to appear everything in same page
			include 'SecondPage.php';
			include 'ThirdPage.php';
		?>	
	</body>
</html>
