<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài 3c</title>
</head>
<body>

<?php

echo "<h3>Sinh số ngẫu nhiên với điều kiện x > y</h3>";

$i = 1;

do {

    $x = rand(1,10);
    $y = rand(1,10);

    if($x > $y)
    {
        echo "Lần $i: x = $x , y = $y <br>";
        $i++;
    }

} while($i <= 5);

?>

</body>
</html>