<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Phep tinh ngau nhien</title>
</head>

<body>

<?php
$x = rand(1,10);
$y = rand(1,10);

echo "x = $x , y = $y <br><br>";

echo "Cộng: " . ($x + $y) . "<br>";
echo "Trừ: " . ($x - $y) . "<br>";
echo "Nhân: " . ($x * $y) . "<br>";
echo "Chia: " . ($x / $y) . "<br>";
echo "Mod: " . ($x % $y) . "<br>";
?>

</body>
</html>