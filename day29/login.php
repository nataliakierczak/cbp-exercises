<?php
require_once ('./shared/database.php');
$db=new Database();

if ($_POST){
$user= $db->getuserbyemail($_POST['email']);
if(empty($user)) {
    echo 'wrong user';
}
  if (password_verify($_POST['password'], $user['password'])){
    session_start();
  $_SESSION['userid']=$user['id'];
  header('Location:index.php');
} else {
    echo "wrong password";
}
}

?>
<br>

<form method='post'>
Email<br>
    <input type="email" name="email"><br>
Password<br>
    <input type="password" name="password"><br>
   <input type="submit" value="Login">
</form>
