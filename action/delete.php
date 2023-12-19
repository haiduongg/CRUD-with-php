<?php
$id = $_GET['id'];
$sql = "DELETE FROM products where product_id = $id";
$query = mysqli_query($connect, $sql);
echo "<script>window.location.href='admin.php'</script>";
