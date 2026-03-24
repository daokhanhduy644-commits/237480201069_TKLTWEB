<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bảng n và n²</title>

<style>
table{
border-collapse:collapse;
margin:auto;
}
th,td{
border:1px solid black;
padding:6px 20px;
text-align:center;
}
h2{
text-align:center;
}
</style>

</head>
<body>

<h2>BẢNG GIÁ TRỊ n VÀ n²</h2>

<table>

<tr>
<th>Số n</th>
<th>Số n²</th>
</tr>

<?php

for($n = 0; $n <= 50; $n++)
{
    $square = $n * $n;

    echo "<tr>";
    echo "<td>$n</td>";
    echo "<td>$square</td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>