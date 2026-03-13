<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính toán số học</title>

<style>
.box{
    width:350px;
    margin:auto;
    border:2px solid black;
    border-radius:20px;
    padding:20px;
    text-align:center;
}
input{
    margin:5px;
}
button{
    padding:5px 10px;
    margin:5px;
}
</style>

</head>

<body>

<div class="box">

<h2>TÍNH TOÁN SỐ HỌC</h2>

<form method="post">

Số thứ 1:
<input type="number" name="a"><br>

Số thứ 2:
<input type="number" name="b"><br>

Kết quả:
<input type="text" value="<?php if(isset($kq)) echo $kq; ?>"><br><br>

<button name="cong">Cộng</button>
<button name="tru">Trừ</button>
<button name="nhan">Nhân</button>
<button name="chia">Chia</button>
<button name="mod">Mod</button>

</form>

<?php

if(isset($_POST["cong"]) || isset($_POST["tru"]) || isset($_POST["nhan"]) || isset($_POST["chia"]) || isset($_POST["mod"])){

$a = $_POST["a"];
$b = $_POST["b"];

if(isset($_POST["cong"])) $kq = $a + $b;

if(isset($_POST["tru"])) $kq = $a - $b;

if(isset($_POST["nhan"])) $kq = $a * $b;

if(isset($_POST["chia"])) $kq = $a / $b;

if(isset($_POST["mod"])) $kq = $a % $b;

echo "<script>document.getElementsByName('a')[0].value='$a';
document.getElementsByName('b')[0].value='$b';
document.getElementsByName('a')[0].nextElementSibling;</script>";

echo "<h3>Kết quả: $kq</h3>";

}

?>

</div>

</body>
</html>