<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "thuvien";

	$con = mysqli_connect($host, $username, $password, $db_name);
	
	if (mysqli_connect_errno()) {
		echo "<script>
			    // New content to replace the original content
			    var newContent = `
			        <h1>Lỗi database</h1>
			        <p>Đã xảy ra lỗi, xem lại file ở /utils/database.php</p>
			        <p>".mysqli_connect_error()."</p>
			    `;

			    // replace entire body with new content
			    document.body.innerHTML = newContent;
			</script>";
		exit();
	}
?>