<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Phep tinh x > y</title>
</head>

<body>

<?php

do{
    $x = rand(1,10);
    $y = rand(1,10);
}while($x <= $y);

echo "x = $x , y = $y <br><br>";

echo "Cộng: " . ($x + $y) . "<br>";
echo "Trừ: " . ($x - $y) . "<br>";
echo "Nhân: " . ($x * $y) . "<br>";
echo "Chia: " . ($x / $y) . "<br>";
echo "Mod: " . ($x % $y) . "<br>";

?>

</body>
</html>