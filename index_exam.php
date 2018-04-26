<!DOCTYPE html>
<html>
<head>
	<title>SuperDate - Find your new superhero lover here!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	
	<?php

include('header.php');
	
// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
	
	// Include and initiate the database class (you only have to do this once)
	include('database.php');
	$database = new Database;
	$database->connect();

	// Get all profiles from the database
	$profile = $database->query("SELECT * FROM profile");
	// var_dump($profiles);
	
	// Get all comments from the database
	$comment = $database->query("SELECT `comment` FROM `superdate`.`comments`");
	// var_dump($comments);

	// Loop through all profiles
	foreach ($profile as $profile) {
		$comments = $database->query("SELECT * FROM comments WHERE profile_to = " . $profile["profile_id"]);
		?>
	
		<article class="profile">
			<ul class=profile-info>
			<img class="profile_pic" src="<?php echo $profile['profile_pic'];?>">
			<li>Name: <?php echo $profile['name'];?></li>
			<li>Gender: <?php echo $profile['gender'];?></li>
			<li>Superpower: <?php echo $profile['superpower'];?></li>
			<li>Interested in: <?php echo $profile['Interested_in'];?></li>
			<li>Age: <?php echo $profile['age'];?> years old</li>
			<li>Weight: <?php echo $profile['weight'];?> kg.</li>
			<li>Height: <?php echo "<span class=\"myClass\">" . $profile['height'] . "</span>";?> cm</li>
			
			<button class"like"><a class="likebtn" href="./like.php?profile_id=<?php echo $profile['profile_id']; ?>">Like <small><?php echo $profile['like'];?></small></a></button>	
			</ul>
			<form action="comment.php" method="post">
				<input type="hidden" name="profile_to" value="<?php echo $profile['profile_id']; ?>"/>
				<textarea class="comment" name="comment" placeholder="Comment.."></textarea>
				<button type="submit">Add comment</button>
			</form>
			
			<h2>Comments</h2>
			<?php
				foreach ($comments as $comment) {
			?>	
				<dl>
					<dt class="">Superman says:</dt>
					<dd><?php echo $comment['comment']; ?>
					<a href="./delete.php?id=<?php echo $comment['id'];?>">Delete</a>
					
					</dd>
				</dl>
			<?php
				}
			?>	
			
			
		</article>
		
		
		
		

		<?php
	}
?>
</body>
</html>