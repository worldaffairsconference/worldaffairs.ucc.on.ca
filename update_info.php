<?php 
	require("common.php"); 
	
	if(
		empty($_POST['firstname']) ||
		empty($_POST['lastname'])  ||
		empty($_POST['school'])
	) { 
		die("You missed a field"); 
	}

	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$email = $_SESSION['user']['email'];
	$f_name = $_POST['firstname'];
	$l_name = $_POST['lastname'];
	$school = $_POST['school'];
	$notes = $_POST['notes'];

	$query = " 
	REPLACE INTO info (
		email,
		first_name,
		last_name,
		plen_1, 
		plen_2,
		plen_3, 
		school,
		notes
	) VALUES (
		'$email',
		'$f_name',
		'$l_name',
		'none', 
		'none', 
		'none',
		'$school',
		'$notes'
	);";

	try { 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	
		header("Location: account.php"); 		 
	}
	
	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
		header("Location: account.php");
	}
?>