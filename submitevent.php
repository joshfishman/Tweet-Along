<?php
	
	require_once 'idiorm.php';
	require_once 'db.php';
	$event = ORM::for_table('events')->create();
	$event->name = $_POST['name'];
	$event->hashtag = $_POST['hashtag'];
	$event->starttime =  strtotime($_POST['startdate']." ".$_POST['starttime']);
	$event->public_event = 1;
	$event->guests = $_POST['guests'];
	$event->photo = "";
	echo $_FILES['photo']['name'];
	if(isset($_FILES['photo']) && $_FILES['photo'] != null)
		$event->photo = upload_photo();
	print_r($event);
	$event->save();
	header("Location: ./index.php?page=chat.php");
	
	function upload_photo() {
		echo $_FILES['photo']['size']<10000000;
		$allowedExts = array("jpg", "jpeg", "gif", "png");
		$extension = end(explode(".", $_FILES['photo']['name']));
		if ((($_FILES['photo']['type'] == "image/gif")
		|| ($_FILES['photo']['type'] == "image/jpeg")
		|| ($_FILES['photo']['type'] == "image/pjpeg"))
		&& ($_FILES['photo']['size'] < 10000000)
		&& in_array(strtolower ($extension), $allowedExts))
		  {
		  if ($_FILES['photo']['error'] > 0)
			{
			echo "Return Code: " . $_FILES['photo']['error'] . "<br />";
			}
		  else
			{
			echo "Upload: " . $_FILES['photo']["name"] . "<br />";
			echo "Type: " . $_FILES['photo']["type"] . "<br />";
			echo "Size: " . ($_FILES['photo']["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES['photo']["tmp_name"] . "<br />";

			if (file_exists("./uploads/event_photos/" . $_FILES['photo']['name']))
			  {
			  echo $_FILES['photo']['name'] . " already exists. ";
			  }
			else
			  {
			  move_uploaded_file($_FILES['photo']['tmp_name'],
			  "./uploads/event_photos/" . $_FILES['photo']['name']);
			  echo "Stored in: " . "./uploads/event_photos/" . $_FILES['photo']['name'];
			  
			  }
			  return "./uploads/event_photos/" . $_FILES['photo']['name'];
			}
		  }
			else
		  {
		  echo "Invalid file";
		  }
	}
?>