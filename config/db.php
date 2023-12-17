<?php
$connect = mysqli_connect('localhost', 'root', '', 'tkweb_asm3');
if ($connect) {
	mysqli_query($connect, "SET NAMES 'UTF8'");
} else {
	echo "<script type='text/javascript'>alert('Connect to database failed');</script>";
}
