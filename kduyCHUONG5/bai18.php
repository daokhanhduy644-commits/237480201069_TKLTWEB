<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Từ dài nhất</title>
</head>
<body>

<h2>Tìm từ dài nhất</h2>

<form method="post">
Nhập chuỗi: <input type="text" name="chuoi" size="40"><br><br>
<input type="submit" value="Tìm">
</form>

<?php
if(isset($_POST["chuoi"]))
{
    $s = $_POST["chuoi"];

    $arr = explode(" ",$s);

    $max = "";
    
    foreach($arr as $word)
    {
        if(strlen($word) > strlen($max))
        {
            $max = $word;
        }
    }

    echo "Từ dài nhất: $max (".strlen($max)." kí tự)";
}
?>

</body>
</html>