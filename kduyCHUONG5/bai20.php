<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đăng nhập</title>

<style>

body{
font-family:Arial;
background:#eee;
}

.box{
width:300px;
margin:100px auto;
background:#333;
padding:20px;
color:white;
border-radius:10px;
}

input{
width:100%;
padding:8px;
margin:6px 0;
}

button{
width:100%;
padding:8px;
margin-top:10px;
background:#444;
color:white;
border:none;
}

</style>

</head>
<body>

<div class="box">

<h3>Đăng nhập thành viên</h3>

<form method="post">

<input type="text" name="email" placeholder="Email name">

<input type="password" name="pass" placeholder="Mật khẩu">

<button type="submit">Đăng nhập</button>

</form>

<?php

$email_dung="admin@gmail.com";
$pass_dung="123456";

if(isset($_POST["email"]))
{
    $email=$_POST["email"];
    $pass=$_POST["pass"];

    if($email==$email_dung && $pass==$pass_dung)
    {
        echo "<p>Đăng nhập thành công</p>";
    }
    else
    {
        echo "<p>Sai email hoặc mật khẩu</p>";
    }
}

?>

</div>

</body>
</html>