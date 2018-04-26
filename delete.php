<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('database.php');
	$database = new Database;
	$database->connect();

	
	
	$sql = "DELETE FROM comments WHERE comment = '?' ";
	
	$values = [
		$_POST["comment"]
	];


	// function to execute the above
	$database->prepared($sql, $values);

	header("Location: index_exam.php");

