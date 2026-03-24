<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính USCLN và BSCNN</title>

<style>
.box{
width:320px;
margin:auto;
border:2px solid black;
border-radius:20px;
padding:20px;
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

<h2>TÍNH USCLN VÀ BSCNN</h2>

<form method="post">

Số thứ 1:
<input type="number" name="so1"><br>

Số thứ 2:
<input type="number" name="so2"><br>

Kết quả:
<input type="text" value="<?php if(isset($kq)) echo $kq; ?>"><br><br>

<input type="submit" name="uscln" value="USCLN">
<input type="submit" name="bscnn" value="BSCNN">

</form>

<?php

if(isset($_POST["so1"]) && isset($_POST["so2"]))
{
    $a = $_POST["so1"];
    $b = $_POST["so2"];

    function USCLN($a,$b){
        while($b != 0){
            $r = $a % $b;
            $a = $b;
            $b = $r;
        }
        return $a;
    }

    $ucln = USCLN($a,$b);
    $bcnn = ($a * $b) / $ucln;

    if(isset($_POST["uscln"]))
    {
        echo "<h3>Kết quả USCLN: $ucln</h3>";
    }

    if(isset($_POST["bscnn"]))
    {
        echo "<h3>Kết quả BSCNN: $bcnn</h3>";
    }

}

?>

</div>

</body>
</html>