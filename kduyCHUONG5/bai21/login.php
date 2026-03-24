<?php
session_start();

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$u = "admin";
$e = "admin@gmail.com";
$p = "123";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý đăng nhập</title>
</head>
<body>

<div style="width:300px;margin:auto;border:2px solid black;padding:20px;text-align:center;">

<h3>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h3>

<?php

if($username==$u && $email==$e && $password==$p)
{
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;

    echo "Thông tin đăng nhập hợp lệ<br><br>";
    echo "<a href='mainpage.php'>Trang chính</a>";
}
else
{
    echo "Thông tin đăng nhập không đúng<br><br>";
    echo "<a href='login.html'>Quay lại</a>";
}

?>

</div>

</body>
</html>