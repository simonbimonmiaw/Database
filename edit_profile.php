<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	

	
// Get all profile info from the database
	include('database.php');
	$database = new Database;
	$database->connect();

	// Select all profiles
	$sql = "SELECT * FROM profile";
	$types = $database->query($sql);
	
	include('header.php');
?>

  <form action="process.php" method="post">
	 
	  
  	<label for="name">Your new supername</label>
  	<input type="text" name="name" placeholder="e.g. John Johnson">
  	
  	<label for="gender">Your new supergender</label>
  	<input type="text" name="gender" placeholder="e.g. superwoman">
	  
	<label for="superpower">Superpower</label>
  	<input type="text" name="superpower" placeholder="e.g. Vince Gilligan">  

  	<label for="interested_in">Intrested in</label>
  	<input type="text" name="interested_in" placeholder="e.g. M for male, F for female">
  	  	
  	<label for="profile_pic">Image</label>
  	<input type="text" name="profile_pic" placeholder="image url link">

  	<label for="age">Your new age (Feel older suddenly)</label>
  	<input type="text" name="age" placeholder="e.g. 42">

  	<label for="weight">Weight</label>
  	<input type="text" name="weight" placeholder="e.g. 88">

	  <label for="height">Your new height</label>
  	<input type="text" name="height" placeholder="e.g. 198">

  	</select>

  	<input type="submit" name="submit" value="Update profile">
  </form>
</body>
</html>