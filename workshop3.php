<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<div>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while($row = $stmt->fetch()):?>
ชื่อสมาชิก:<?=$row ["name"]?><br>
ที่อยู่:<?=$row ["address"]?><br>
อีเมล:<?=$row ["email"]?><br>
<div>
<img src="img/member_photo/<?=$row["username"]?>.jpg" width="100"><br><hr>
</div>
<?php endwhile;?>
</div>
</body>
</html>