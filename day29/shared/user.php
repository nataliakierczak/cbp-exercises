<?php
class User 
{
    public function __construct($db){
        $this->db = $db;
    }
    public function getName()
    {
        //checking whether the user is logged in
    if (isset($_SESSION['userid'])){
        $user=$this->db->getUser($_SESSION['userid']);
        if ($user)
        {
            return $user['name'];
        } 
    }
    return false;
    }
}