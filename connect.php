<?php 
	
	//error_reporting(0);
	// Include ezSQL core
	include_once "./service/ezSQL/shared/ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "./service/ezSQL/mysqli/ez_sql_mysqli.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	// db_host can "host:port" notation if you need to specify a custom port
	$db = new ezSQL_mysqli('root','','darteart','localhost');

	/**********************************************************************
	*  ezSQL demo for mySQLi database
	*/

	// Demo of getting a single variable from the db
	// (and using abstracted function sysdate)
	$query = "INSERT INTO user(usr_email) VALUES ('diegodelfinacharte@gmail.com')";
	$data = $db->query($query);
	if($data)
		echo 'insertado';
	else 
		echo 'no insertado';

 ?>