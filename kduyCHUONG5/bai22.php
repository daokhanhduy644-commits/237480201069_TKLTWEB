<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đăng nhập khách hàng</title>
</head>
<body>

<h2>Đăng nhập khách hàng</h2>

<form method="post">

Tên khách hàng:<br>
<input type="text" name="ten"><br><br>

Số điện thoại:<br>
<input type="text" name="sdt"><br><br>

<input type="submit" value="Lưu">

</form>

<?php

if(isset($_POST["ten"]))
{
    $ten=$_POST["ten"];
    $sdt=$_POST["sdt"];

    setcookie("ten",$ten,time()+600);
    setcookie("sdt",$sdt,time()+600);

    echo "Đã lưu cookie thành công<br>";
}

if(isset($_COOKIE["ten"]))
{
    echo "<h3>Thông tin trong cookie</h3>";
    echo "Tên: ".$_COOKIE["ten"]."<br>";
    echo "SĐT: ".$_COOKIE["sdt"];
}

?>

</body>
</html>