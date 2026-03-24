<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Danh sách năm</title>
</head>
<body>

<h2>Chọn năm</h2>

<form method="post">

<select name="nam">

<?php

$year = date("Y"); 

for($i = 1900; $i <= $year; $i++)
{
    echo "<option value='$i'>$i</option>";
}

?>

</select>

<input type="submit" value="Chọn">

</form>

<?php

if(isset($_POST["nam"]))
{
    $chon = $_POST["nam"];
    echo "<h3>Năm bạn chọn: $chon</h3>";
}

?>

</body>
</html>
