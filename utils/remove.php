<?php 
	if (isset($_GET['id'])) {
		include 'database.php';
		$sql = "DELETE FROM `quanli` WHERE id='".$_GET['id']."'";
		$result = $con->query($sql);
	}
 ?>