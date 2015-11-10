<?php 


	if(isset($_POST['btnregister'])){
		
		echo 'button click';

		include_once "./service/ezSQL/shared/ez_sql_core.php";

		// Include ezSQL database specific component
		include_once "./service/ezSQL/mysqli/ez_sql_mysqli.php";
		$db = new ezSQL_mysqli('root','','darteart','localhost');
		var_dump($db);
	}else {
		echo 'button no click';
	}
 ?>