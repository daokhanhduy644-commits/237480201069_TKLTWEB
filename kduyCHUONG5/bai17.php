<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tách từ</title>
</head>
<body>

<h2>Tách từ trong chuỗi</h2>

<form method="post">
Nhập chuỗi: <input type="text" name="chuoi"><br><br>
<input type="submit" value="Tách">
</form>

<?php
if(isset($_POST["chuoi"]))
{
    $s = $_POST["chuoi"];

    $arr = explode(" ",$s);

    foreach($arr as $i=>$v)
    {
        echo "a[$i] = $v <br>";
    }
}
?>

</body>
</html>