<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý mảng</title>
</head>
<body>

<h2>Nhập danh sách số nguyên</h2>

<form method="post">
Nhập các số (cách nhau bằng dấu cách): <br>
<input type="text" name="mang" size="40">
<br><br>

<select name="chon">
<option value="max">Tìm số lớn nhất</option>
<option value="min">Tìm số nhỏ nhất</option>
<option value="scp">Tìm số chính phương</option>
<option value="chan">In số chẵn</option>
<option value="le">In số lẻ</option>
<option value="tang">Sắp xếp tăng dần</option>
</select>

<br><br>
<input type="submit" value="Thực hiện">
</form>

<?php

function timMax($arr){
    return max($arr);
}

function timMin($arr){
    return min($arr);
}

function soChinhPhuong($arr){
    $kq="";
    foreach($arr as $v){
        if($v>=0){
            $s=sqrt($v);
            if($s==floor($s))
            $kq.=$v." ";
        }
    }
    return $kq;
}

function soChan($arr){
    $kq="";
    foreach($arr as $v){
        if($v%2==0)
        $kq.=$v." ";
    }
    return $kq;
}

function soLe($arr){
    $kq="";
    foreach($arr as $v){
        if($v%2!=0)
        $kq.=$v." ";
    }
    return $kq;
}

function sapXepTang($arr){
    sort($arr);
    return implode(" ",$arr);
}

if(isset($_POST["mang"]))
{
    $arr=explode(" ",$_POST["mang"]);
    $chon=$_POST["chon"];

    echo "<h3>Kết quả:</h3>";

    if($chon=="max")
    echo "Số lớn nhất: ".timMax($arr);

    if($chon=="min")
    echo "Số nhỏ nhất: ".timMin($arr);

    if($chon=="scp")
    echo "Số chính phương: ".soChinhPhuong($arr);

    if($chon=="chan")
    echo "Các số chẵn: ".soChan($arr);

    if($chon=="le")
    echo "Các số lẻ: ".soLe($arr);

    if($chon=="tang")
    echo "Sắp xếp tăng dần: ".sapXepTang($arr);
}

?>

</body>
</html>