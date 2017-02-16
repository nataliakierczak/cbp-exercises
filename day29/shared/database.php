<?php

class Database
{
    //property of an object
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=eshop;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production
    }

    public function insertproduct($name, $price, $size, $color)
    {
    //connecting data from the form with the database
    //insert into tablle products (put into columns from the database in adminer) and use four placeholders - we will use them in the next line
    //the number of ? must match the number of columns in INSERT INTO as well as execute
    $stmt = $this->db->prepare('INSERT INTO products(name, price, size, color) VALUES(?,?,?,?)'); 
    $stmt->execute([$name, $price, $size, $color]);
    return $this->db->lastInsertId();
    }

    public function getproducts()
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products');
        $stmt-> execute();
        return $stmt->fetchAll();
    }

    public function getproduct($id)
    {
                                                                                        //do not put a variable after WHERE - security reasons
        $stmt = $this->db->prepare('SELECT id, name, price, size, color FROM products WHERE id = ?');
        $stmt-> execute([$id]);
        return $stmt->fetch();
    }

    public function insertorder($userid)
    {                                                            
        $stmt = $this->db->prepare('INSERT INTO orders (user_id, created) VALUES(?, NOW())');
        $stmt-> execute([$userid]);
        return $this->db->lastInsertId();
        
    }
    public function insertProductToOrder($product_id, $order_id)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products(product_id, order_id) VALUES(?,?)'); 
        $stmt->execute([$product_id, $order_id]);
        return $this->db->lastInsertId();

    }

    public function insertuser($name, $email, $password)
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, email, password) VALUES(?, ?, ?)');
        $stmt-> execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]); //CONSTANT-constant to hash the password 
        return $this->db->lastInsertId();
    }
    public function getuser($id)
    {
                                                                                        //do not put a variable after WHERE - security reasons
        $stmt = $this->db->prepare('SELECT id, name, email, password FROM users WHERE id = ?');
        $stmt-> execute([$id]);
        return $stmt->fetch();
    }
} 

