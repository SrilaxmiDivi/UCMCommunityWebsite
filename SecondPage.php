<?php

	if(isset($_POST["RoomButton"])){
		echo '<form action="UCMIndianCommunityFirstPage.php" method="POST">
		<br> <br> <input type="submit" name="postsubmitDetails" value="Post New Room Availability" ></input> 
		<input type="submit" name="getsubmitDetails" value="Get Available Room Details" ></input> </form>' ;
	}

	if(isset($_POST["postsubmitDetails"])){
		echo '<form action="UCMIndianCommunityFirstPage.php" method="POST">
		<br>First Name: <input type="text" name="first" ></input> <br>
		<br> Last Name: <input type="text" name="last" ></input> <br>
		<br> Email: <input type="text" name="email" ></input> <br> 
		<br> phone: <input type="text" name="phone" ></input> <br>
		<br> Description: <textarea name= "inputtextarea" rows="8" cols="100"></textarea> <br>
		<br> <input type="submit" name="postsubmit" value="Submit" ></input> <br> </form>' ;
	}

?>