<?php

var_dump($_POST);
echo nl2br (var_export($_FILES, true));

$source_path=$_FILES['uploaded_file']['tmp_name'];

//$target_dir = __DIR__ . '/uploads';

$target_path =__DIR__. '/uploads/' .$_FILES['uploaded_file']['name'];

move_uploaded_file($source_path, $target_path);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
<div class="form">

<form enctype="multipart/form-data" action="" method="post">

<input type="text" name="animal">Text

<input type="file" name="uploaded_file">

<input type="submit" value="Upload file!">
</form>

</div>

</body>
</html>