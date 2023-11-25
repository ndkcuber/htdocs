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
	if (isset($_POST['tensach']) && isset($_POST['tacgia'])){
		$tensach = $_POST['tensach'];
		$tacgia = $_POST['tacgia'];
		
	}
		
 ?>
<body>
	<div class="container mt-4 card">
		<form class="m-4" method="post" action="addbook.php">
		  <div class="form-group">
		    <label for="tensach">Tên sách</label>
		    <input name="tensach" class="form-control" placeholder="Tên sách" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label for="tacgia">Tác giả</label>
		    <input name="tacgia" class="form-control" placeholder="Tác giả" required>
		  </div>
			<br>
		  
		  <input type="submit" class="btn btn-success" value="Thêm sách">
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
