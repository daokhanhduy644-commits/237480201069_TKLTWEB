<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload file</title>
</head>
<body>

<h2>Upload file</h2>

<form method="post" enctype="multipart/form-data">

Chọn file:
<input type="file" name="file"><br><br>

<input type="submit" value="Upload">

</form>

<?php

if(isset($_FILES["file"]))
{
    $ten=$_FILES["file"]["name"];
    $tmp=$_FILES["file"]["tmp_name"];

    move_uploaded_file($tmp,"Tailieu/".$ten);

    echo "Upload thành công";
}

?>

</body>
</html>