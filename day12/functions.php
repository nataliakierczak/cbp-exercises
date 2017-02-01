<?php
function get_current_year()
{
    return date ('Y');
}

function print_current_year()
{
   echo date('j.n.Y');
}

function render_page($page_file){
    include'header.php';

}
function print_greeting()
{
global $my_greeting;

echo $my_greeting;
}
/**
*dump and die
*/
function dd($variable)
{
var_dump($variable);
die ();
}
?>