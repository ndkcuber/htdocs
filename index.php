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
	<title>Trang chủ</title>
</head>
<?php 
	include 'utils/navbar.html';
 ?>
<body>
	<div class="container mt-4">
		<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Học sinh</th>
	      <th scope="col">Lớp</th>
	      <th scope="col">Tên sách</th>
	      <th scope="col">Ngày mượn</th>
	      <th scope="col">Ngày trả</th>
	    </tr>
	  </thead>
	  <tbody>

	    <?php 
	    	include 'utils/database.php';
	    	$sql = "SELECT * FROM quanli";
			$result = mysqli_query($con,$sql);
			if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						$ngaymuon = date("d/m/Y", strtotime($row['ngaymuon']));
						$ngaytra = date("d/m/Y", strtotime($row['ngaytra']));
						echo "	<tr>
							      <th scope=\"row\">".$row['ID']."</th>
							      <td>".$row['tenhs']."</td>
							      <td>".$row['lophs']."</td>
							      <td>".$row['tensach']."</td>
							      <td>".$ngaymuon."</td>
							      <td>".$ngaytra."</td>
							      <td><button class=\"delete-btn\" onclick=\"xoa_hs(".$row['ID'].")\">x</button></td>
							    </tr>";
						}
				} else{
					echo "<tr><td>Không có dữ liệu</td></tr>";
				}
		 ?>

	  </tbody>
	</table>
	</div>
</body>
<script>
	function xoa_hs(id) {
	  fetch(`./utils/remove.php?id=${id}`)
	  Swal.fire({
		  title: "Thành công!",
		  text: "Đã xóa thành công!",
		  icon: "success",
		  confirmButtonText: '<a href="/" style="color:white; text-decoration: none;" >OK</a>'
		});
	}
</script>
</html>