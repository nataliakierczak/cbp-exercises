<?php 
require_once 'database.php';
if ($_POST) {
    $stmt = $db->prepare('INSERT INTO albums (name, id_owner) VALUES (?,?)'); //preparing database
    $stmt -> execute ([$_POST['name'], $_POST['owner']]); //add data inserted through the form to the database - 'name of the album' and 'exisiting owner id' into table 'albums'
    header('Location: albums.php?status=ok');
}
if(isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}
$stmt = $db->prepare('SELECT id, firstname, lastname FROM users ORDER BY lastname, firstname');
$stmt->execute();
$owners = []; //creating an empty array 
foreach($stmt->fetchAll() as $value) {
    $owners [$value ['id']] = $value ['firstname'] . ' ' .$value['lastname'];
}
?>

<form action="" method="post">
Name: <input name = "name">
<br>
Owner: <select name = "owner"> <!-- insert owner ID that already exist in the database; it is a way to create new album with existing owner ID-->
<?php foreach($owners as $id => $name) {
    echo "<option value=$id>$name</option>";
}
?>
 </select>
<input type = "submit">
</form>