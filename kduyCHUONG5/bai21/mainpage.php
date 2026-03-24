<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Trang chính</title>
</head>
<body>

<div style="width:400px;margin:100px auto;border:2px solid black;padding:20px;text-align:center;">

<h3>TRANG CHÍNH</h3>

<?php

if(isset($_SESSION["username"]))
{
    echo "Người dùng đã đăng nhập với tên <b>".$_SESSION["username"]."</b>";
    echo "<br>Email là <b>".$_SESSION["email"]."</b>";
}
else
{
    echo "Bạn chưa đăng nhập";
}

?>

<br><br>

<a href="logout.php">Đăng xuất</a>

</div>

</body>
</html>