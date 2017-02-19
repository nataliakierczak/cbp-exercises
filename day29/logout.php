<?php
session_start();
//destroying user id
unset($_SESSION['userid']);
header('Location:index.php');
