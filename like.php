<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('database.php');
	$database = new Database;
	$database->connect();

	
	
	$sql = "UPDATE `profile` SET `like` = `like` + 1 WHERE profile_id = " . htmlspecialchars($_GET["profile_id"]);

	// function to execute the above
	$database->queryWithoutFetchAll($sql);

	header("Location: index_exam.php");

