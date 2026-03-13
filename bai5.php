<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính USCLN và BSCNN</title>

<style>
.box{
    width:350px;
    margin:auto;
    border:2px solid black;
    border-radius:20px;
    padding:20px;
    text-align:center;
}
button{
    margin:5px;
    padding:5px 10px;
}
</style>

</head>

<body>

<div class="box">

<h2>TÍNH USCLN VÀ BSCNN</h2>

<form method="post">

Số thứ 1:
<input type="number" name="a"><br><br>

Số thứ 2:
<input type="number" name="b"><br><br>

Kết quả:
<input type="text" value="<?php if(isset($kq)) echo $kq; ?>"><br><br>

<button name="uscln">USCLN</button>
<button name="bscnn">BSCNN</button>

</form>

<?php

if(isset($_POST["uscln"]) || isset($_POST["bscnn"])){

$a = $_POST["a"];
$b = $_POST["b"];

$u = $a;
$v = $b;

/* Tìm USCLN */
while($v != 0){
    $r = $u % $v;
    $u = $v;
    $v = $r;
}

$uscln = $u;

/* Tìm BSCNN */
$bscnn = ($a * $b) / $uscln;

if(isset($_POST["uscln"]))
    $kq = $uscln;

if(isset($_POST["bscnn"]))
    $kq = $bscnn;

echo "<h3>Kết quả: $kq</h3>";
}

?>

</div>

</body>
</html>