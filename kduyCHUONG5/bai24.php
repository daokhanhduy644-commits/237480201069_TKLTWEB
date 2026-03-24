<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload nhiều file</title>
</head>
<body>

<h2>Upload nhiều file</h2>

<form method="post" enctype="multipart/form-data">

<input type="file" name="files[]" multiple><br><br>

<input type="submit" value="Upload">

</form>

<?php

if(isset($_FILES["files"]))
{
    $files=$_FILES["files"];

    for($i=0;$i<count($files["name"]);$i++)
    {
        $ten=$files["name"][$i];
        $tmp=$files["tmp_name"][$i];

        move_uploaded_file($tmp,"BoSuuTap/".$ten);
    }

    echo "Upload thành công các file";
}

?>

</body>
</html>