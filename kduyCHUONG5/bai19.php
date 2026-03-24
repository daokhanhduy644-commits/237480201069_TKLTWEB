<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thời gian truy cập</title>
</head>
<body>

<?php

if(isset($_COOKIE["thoigian"]))
{
    echo "Thời gian truy cập gần đây nhất là: ".$_COOKIE["thoigian"];
}
else
{
    echo "Đây là lần đầu bạn truy cập trang web.";
}

$time = date("d/m/Y H:i:s");

setcookie("thoigian",$time,time()+600);

?>

</body>
</html>