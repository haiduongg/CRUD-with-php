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
		<form id="signup-form">
			<h2>Đăng ký tài khoản</h2>
			<div class="form-group">
				<label for="fullname">Họ và tên:</label>
				<input type="text" id="fullname" name="fullname" required>
			</div>
			<div class="form-group">
				<label for="username">Tên đăng nhập:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="password">Mật khẩu:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="confirm-password">Xác nhận mật khẩu:</label>
				<input type="password" id="confirm-password" name="confirm-password" required>
			</div>
			<button type="submit">Đăng ký</button>
		</form>
	</div>
</body>

</html>