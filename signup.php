<?php
require_once('config/db.php');

if (isset($_POST['sbm'])) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "INSERT INTO `accounts`(`fullname`, `username`, `password`, `role`) VALUES ('$fullname','$username','$password','user')";
	$query = mysqli_query($connect, $sql);
	echo "<script>alert('Bạn đã tạo tài khoản thành công!')</script>";
	echo "<script>window.location.href='index.php'</script>";
}
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
	<link rel="stylesheet" href="./style/signup.css">
	<title>Đăng ký tài khoản</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
	<div class="container">
		<form method="POST" enctype="multipart/form-data">
			<h2>Đăng ký tài khoản</h2>
			<div class="form-group">
				<label for="fullname">Họ và tên:</label>
				<input type="text" id="fullname" name="fullname" required>
			</div>
			<div class="form-group">
				<label for="username">Tên đăng nhập:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group" style="position: relative">
				<label for="password">Mật khẩu:</label>
				<input type="password" id="password" name="password" required>
				<div style="position: absolute; top: 50%; right: 10px; font-size: 25px; cursor: pointer;" onclick="show()"><i class='bx bx-show'></i></div>
			</div>
			<button type="submit" name="sbm">Đăng ký</button>
			<a href="login.php" style="margin-left: 30px;">Đăng nhập</a>
		</form>
	</div>
	<script>
		function show() {
			if (document.getElementById('password').getAttribute('type') == 'password') {
				document.getElementById('password').setAttribute('type', 'text')
			} else {
				document.getElementById('password').setAttribute('type', 'password')
			}
		}
	</script>
</body>

</html>