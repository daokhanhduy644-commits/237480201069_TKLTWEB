<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bàn cờ</title>

<style>

table{
border-collapse:collapse;
margin:auto;
}

td{
width:40px;
height:40px;
}

</style>

</head>
<body>

<h2 style="text-align:center;">BÀN CỜ CARO</h2>

<table border="1">

<?php

for($i = 0; $i < 8; $i++)
{
    echo "<tr>";

    for($j = 0; $j < 8; $j++)
    {
        if(($i + $j) % 2 == 0)
        {
            echo "<td style='background:white'></td>";
        }
        else
        {
            echo "<td style='background:black'></td>";
        }
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>