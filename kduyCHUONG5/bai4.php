<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính toán số học</title>
<style>
.box{
width:300px;
margin:auto;
border:2px solid black;
padding:20px;
border-radius:15px;
}
h2{
text-align:center;
}
input{
margin:5px;
}
</style>
</head>
<body>

<div class="box">

<h2>TÍNH TOÁN SỐ HỌC</h2>

<form method="post">

Số thứ 1:
<input type="number" name="so1"><br>

Số thứ 2:
<input type="number" name="so2"><br>

Kết quả:
<input type="text" value="<?php if(isset($kq)) echo $kq; ?>"><br><br>

<input type="submit" name="cong" value="Cộng">
<input type="submit" name="tru" value="Trừ">
<input type="submit" name="nhan" value="Nhân">
<input type="submit" name="chia" value="Chia">
<input type="submit" name="mod" value="Mod">

</form>

<?php

if(isset($_POST["so1"]) && isset($_POST["so2"]))
{
    $a = $_POST["so1"];
    $b = $_POST["so2"];

    if(isset($_POST["cong"])) $kq = $a + $b;
    if(isset($_POST["tru"])) $kq = $a - $b;
    if(isset($_POST["nhan"])) $kq = $a * $b;
    if(isset($_POST["chia"])) $kq = $a / $b;
    if(isset($_POST["mod"])) $kq = $a % $b;

    echo "<h3>Kết quả: $kq</h3>";
}

?>

</div>

</body>
</html>