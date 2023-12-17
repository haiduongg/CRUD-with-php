<?php
$sql = "SELECT * FROM products";
$query = mysqli_query($connect, $sql);

$i = 1;
while ($row = mysqli_fetch_assoc($query)) {
?>
	<tr>
		<td>#<?php echo $i++; ?></td>
		<td><?php echo $row['product_name'] ?></td>
		<td><?php echo $row['image'] ?></td>
		<td>
			<?php
			echo number_format($row['price'], 0, '', ',');
			echo "đ"
			?>
		</td>
		<td>Them</td>
	</tr>
<?php
}
?>