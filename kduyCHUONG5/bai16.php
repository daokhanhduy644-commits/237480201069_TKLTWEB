<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đảo chuỗi</title>
</head>
<body>

<h2>Đảo ngược chuỗi</h2>

<form method="post">
Nhập chuỗi: <input type="text" name="chuoi"><br><br>
<input type="submit" value="Đảo chuỗi">
</form>

<?php
if(isset($_POST["chuoi"]))
{
    $s = $_POST["chuoi"];
    $dao = strrev($s);

    echo "Chuỗi đảo: $dao";
}
?>

</body>
</html>