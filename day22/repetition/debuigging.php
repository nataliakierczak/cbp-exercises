<?php
//use top two lines in every project
ini_set('display_errors', 'On'); //do not use in production
error_reporting(E_ALL | E_STRICT); //all errors including strict errors

//for production - all errors except notices:
error_reporting(E_ALL & ~E_STRICT);

ini_set('error_reporting', E_ALL); //errors, warning and notices



//look at values:
function dd($value)
{
    var_dump($value); //print information about variable
    die(); //stop execution of the script
}




