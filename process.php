	
<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('database.php');
	$database = new Database;
	$database->connect();

	
	
	$sql = "UPDATE profile SET 
		
						
							name = '" . $_POST['name'] . 
                            "', gender = '" . $_POST['gender'] .
                            "', superpower = '" . $_POST['superpower'] .
                            "', interested_in = '" . $_POST['interested_in'] .
                            "', profile_pic = '" . $_POST['profile_pic'] .
                            "', age = '" . $_POST['age'] .
                            "', weight = '" . $_POST['weight'] .
                            "', height = '" . $_POST['height'] .

					"' WHERE profile_id='1'";
											
		


	;



	$database->queryWithoutFetchAll($sql);
	
	header("Location: index_exam.php");

?>

