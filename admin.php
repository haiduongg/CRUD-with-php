<?php
require_once 'config/db.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style/admin_style.css">
	<title>Admin page - Management Products</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
	<h1 class="title">Danh sách sản phẩm</h1>
	<button class="btn_add">
		<i class='bx bx-plus'></i>
		<p>Thêm sản phẩm</p>
	</button>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên sản phẩm</th>
				<th>Ảnh</th>
				<th>Giá</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once "action/admin_list.php"
			?>
		</tbody>
	</table>
</body>

</html>