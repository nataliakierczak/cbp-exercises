<?php
if (!empty($_POST)) {
$data= array (
'name'=> $_POST['name'],
'description' => $_POST['description'],
'added-by' => $_POST['added-by'],
'selected-by' => $_POST['selected-by'],
'completed' => $_POST['completed']
);

insert_data($data);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

Description:
<textarea name="description" id="" cols="30" rows="10"></textarea>
<br><hr>

Added by: 
<select name="added-by">
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>

Selected by: 
<select name="selected-by">
<option value="Aniko">Aniko</option>
<option value="Ezequiel">Ezequiel</option>
<option value="Mohamed">Mohamed</option>
<option value="Natalia">Natalia</option>
<option value="Tomomi">Tomomi</option>
</select>
<br><hr>

Completed:
<input type="checkbox" name="completed">
<br><hr>

<input type="submit" value="Submit the task">
<br><hr>
</form>

</body>
</html>
