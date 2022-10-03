<?php include "connect1.php"; ?>
<html>
<head><meta charset="utf-8"></head>
<body>
	<?php
	$stmt = $pdo->prepare("SELECT * FROM product");
	$stmt->execute();
	?>

	<table border="1">
		<tr>
			<th>รหัสสินค้า: </th>
			<th>ชื่อสินค้า: </th>
			<th>รายละเอียดสินค้า: </th>
			<th>ราคา: </th>
		</tr>
		<?php

		while ($row = $stmt->fetch()) :
		?>
		<tr>
			<td><?php echo $row["pid"] ?></td>
			<td><?php echo $row["pname"] ?></td>
			<td><?php echo $row["pdetail"] ?></td>
			<td><?php echo $row["price"] ?> บาท</td>
		</tr>

		
	<?php endwhile; ?>

	</table>


	
	
</body>
</html>