<?php 
class connection{
    public function __construct(){
        global $pdo;
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=forum','root','');
        }catch(PDOException $e){
            exit('Datebase Error');
        }
    }
}