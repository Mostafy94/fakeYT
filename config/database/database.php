<?php 


class Connexion {
    static private $host = "localhost";
    static private $user = "root";
    static private $password ="";
    static private $database = "youtube";

    static private $tabUTF8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    static private $pdo;

    static public function pdo() { return self::$pdo;}


    static public function connect(){

        $host = self::$host;
        $database = self::$database;
        $user = self::$user;
        $password = self::$password;
        $tabUTF8 = self::$tabUTF8;
        
        try{
            self::$pdo = new PDO("mysql:host=$host;dbname=$database",$user,$password,$tabUTF8);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e){
            echo "Erreur de connexion : $e";
        }
    }
     

    
    
}
