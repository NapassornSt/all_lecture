<?php include "connect.php" ?>
<?php
	$stmt = $pdo->prepare("INSERT INTO member VALUES ('', ?, ?, ?)");
	$stmt->bindParam(1, $_POST["name"]);
	$stmt->bindParam(2, $_POST["address"]);
	$stmt->bindParam(3, $_POST["email"]);
	$stmt->execute();
	$username = $pdo->lastInsertId();
?>
<html>
	<head><meta charset="UTF-8"></head>
	<body>
		สมัครสมาชิกใหม่สำเร็จ คือ <?=$username?>
	</body>
</html>