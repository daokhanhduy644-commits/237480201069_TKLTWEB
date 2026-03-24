<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Danh sách màu</title>
</head>
<body>

<h2>Danh sách màu</h2>

<?php

$colors = array("black","blue","green","red","brown","magenta");

foreach($colors as $color)
{
    echo "<span style='color:$color'>$color</span> ";
}

?>

</body>
</html>