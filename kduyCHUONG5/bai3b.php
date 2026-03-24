<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài 3b</title>
</head>
<body>

<?php

do{
    $x = rand(1,10);
    $y = rand(1,10);
}while($x > $y);

echo "x = $x <br>";
echo "y = $y <br><br>";

echo "Cộng: " . ($x + $y) . "<br>";
echo "Trừ: " . ($x - $y) . "<br>";
echo "Nhân: " . ($x * $y) . "<br>";
echo "Chia: " . ($x / $y) . "<br>";
?>

</body>
</html>