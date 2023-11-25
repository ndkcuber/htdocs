<!DOCTYPE html>
<html>
<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lí</title>
</head>
<?php 
	include 'utils/navbar.html'; 
	include './utils/database.php';
	if (isset($_POST['tenhs']) && isset($_POST['tensach']) && isset($_POST['ngaytra']) && isset($_POST['lophs'])) {
		$tenhs = $_POST['tenhs'];
		$lophs = $_POST['lophs'];
		$tensach = $_POST['tensach'];
		$ngaytra = date("Y-m-d", strtotime($_POST['ngaytra']));
		$sql = "INSERT INTO `quanli`(`tenhs`, `lophs`, `tensach`, `ngaymuon`,`ngaytra`) VALUES ('".$tenhs."','".$lophs."','".$tensach."', '".date('Y-m-d')."','".$ngaytra."')";
		$result = $con->query($sql);
		if ($result) {
			echo "<script>Swal.fire({
				  title: \"Thành công!\",
				  text: \"Nhắc $tenhs nhớ trả sách:))\",
				  icon: \"success\"
				});</script>";
						}
					}
		$_POST = array();
 ?>
<body>
	<div class="container mt-4 card">
		<form class="m-4">
		  <div class="form-group">
		    <label for="tenhs">Tên sách</label>
		    <input name="tenhs" class="form-control" placeholder="Tên sách" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label for="lophs">Tác giả</label>
		    <input name="lophs" class="form-control" placeholder="Tác giả" required>
		  </div>
			<br>
		  
		  <h2 onclick="loi()" class="btn btn-success">Thêm sách</h2>
		</form>
	</div>
</body>
<script>
	function loi(){
		Swal.fire({
		  title: "Lỗi",
		  text: "Chức năng này chưa được cải tiến",
		  icon: "error"
		});
	}
	
</script>
</html>
