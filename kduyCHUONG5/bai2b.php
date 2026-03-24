<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài 2b</title>
</head>
<body>

<form method="post">
Họ và tên: <input type="text" name="hoten"><br><br>
Ngày sinh: <input type="text" name="ngaysinh"><br><br>
Lớp: <input type="text" name="lop"><br><br>
Điểm: <input type="text" name="diem"><br><br>

<input type="submit" value="Hiển thị">
</form>

<?php
if(isset($_POST["hoten"]))
{
    $hoten = $_POST["hoten"];
    $ngaysinh = $_POST["ngaysinh"];
    $lop = $_POST["lop"];
    $diem = $_POST["diem"];

    echo "<h3>Thông tin sinh viên</h3>";
    echo "Họ và tên: $hoten <br>";
    echo "Ngày sinh: $ngaysinh <br>";
    echo "Lớp: $lop <br>";
    echo "Điểm: $diem";
}
?>

</body>
</html>