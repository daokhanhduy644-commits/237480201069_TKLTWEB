<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý mảng</title>
</head>
<body>

<h2>Nhập mảng số nguyên</h2>

<form method="post">
Nhập các số (cách nhau bằng dấu cách): <br>
<input type="text" name="mang" size="40">
<br><br>
<input type="submit" value="Thực hiện">
</form>

<?php

if(isset($_POST["mang"]))
{

    $input = $_POST["mang"];
    $arr = explode(" ", $input);

    echo "<h3>Mảng đã nhập:</h3>";
    foreach($arr as $value)
    {
        echo $value . " ";
    }

    $tongchan = 0;
    $tongle = 0;

    foreach($arr as $value)
    {
        if($value % 2 == 0)
        {
            $tongchan += $value;
        }
        else
        {
            $tongle += $value;
        }
    }

    echo "<br><br>";
    echo "Tổng số chẵn: $tongchan <br>";
    echo "Tổng số lẻ: $tongle <br>";

    $max = max($arr);
    $min = min($arr);

    echo "Giá trị lớn nhất: $max <br>";
    echo "Giá trị nhỏ nhất: $min <br>";

    echo "<br>Mảng đảo ngược: ";

    $dao = array_reverse($arr);

    foreach($dao as $value)
    {
        echo $value . " ";
    }

}

?>

</body>
</html>