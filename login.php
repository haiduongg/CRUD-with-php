<?php
require_once('config/db.php');
$sql = "SELECT * FROM `accounts`";
$query = mysqli_query($connect, $sql);

if (isset($_POST['sbm'])) {
	$flag = false;
	while ($row = mysqli_fetch_assoc($query)) {
		$username = $row['username'];
		$password = $row['password'];
		$role = $row['role'];

		$input_username = $_POST['username'];
		$input_password = $_POST['password'];
		if (($username == $input_username) and ($password == $input_password)) {
			echo "<script>alert('Bạn đã đăng nhập thành công!')</script>";
			$flag == true;
			if ($role == 'admin') echo "<script>window.location.href='admin.php'</script>";
			else echo "<script>window.location.href='index.php'</script>";
		}
	};
	if ($flag == false) echo "<script>alert('Đăng nhập thất bại')</script>";
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
	<link rel="stylesheet" href="./style//login.css">
	<title>Đăng nhập</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
	<div class="container">
		<form method="POST" enctype="multipart/form-data">
			<h2>Đăng nhập</h2>
			<div class="form-group">
				<label for="username">Tên đăng nhập:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Mật khẩu:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit" name="sbm">Đăng nhập</button>
			<a href="signup.php" style="margin-left: 30px;">Đăng ký</a>
		</form>
	</div>
</body>

</html>