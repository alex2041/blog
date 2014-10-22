<?php
/* бд */
class db{
    public function __construct(){
        try{
	$this->pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
    } catch (PDOException $e){
        exit('Database error.');
     }
    }
}