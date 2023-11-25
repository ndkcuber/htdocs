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
 ?>
 <?php 
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
		<form class="m-4" method="post" action="manage.php">
		  <div class="form-group">
		    <label for="tenhs">Tên học sinh</label>
		    <input name="tenhs" class="form-control" placeholder="Họ và tên học sinh" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label for="lophs">Lớp học sinh</label>
		    <input name="lophs" class="form-control" placeholder="Lớp học sinh" required>
		  </div>
		  
		  <br>
		  <div class="form-group">
		    <label for="tensach">Tên sách</label>
		    <form class="d-flex" role="search" action="javascript:void(0);">
		          <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên sách hoặc tác giả" name="tensach" id="search-input" required>
		    </form>
		      <div class="container">
		        <div id="search-results">
		          
		        </div>
		  	   </div>
		  <br>
		  <div class="form-group">
		    <label for="ngaytra">Ngày trả</label>
		    <input type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control" name="ngaytra" required>
		  </div>
		  <br>
		  
		  <button type="submit" class="btn btn-success">Thêm</button>
		</form>
	</div>
</body>
<script>
  const searchInput = document.querySelector('#search-input');
  const searchResults = document.querySelector('#search-results');

  searchInput.addEventListener('input', function() {
    const searchTerm = this.value.trim();

    if (searchTerm.length > 0) {
      fetch(`./utils/search.php?q=${searchTerm}`)
        .then(response => response.json())
        .then(data => {
          let resultsHtml = '';

          data.forEach(result => {
            resultsHtml += `<div class="autocomplete-item btn btn-success m-1" data-value="${result.title}">${result.title}</div>`;
          });

          searchResults.innerHTML = resultsHtml;

          // Add click event listener for each autocomplete item
          const autocompleteItems = document.querySelectorAll('.autocomplete-item');
          autocompleteItems.forEach(item => {
            item.addEventListener('click', function() {
              searchInput.value = this.getAttribute('data-value');
              searchResults.innerHTML = ''; // Clear the results
            });
          });
        });
    } else {
      searchResults.innerHTML = '';
    }
  });
</script>
</html>
