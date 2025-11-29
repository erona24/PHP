<?php 

$host = "localhost";
$db = "eronaphp";
$user = "root";
$pass = "";


try{
     
    $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$pass);

   $surname = "vuthi";
   $password = "123456";

   $sql = "INSERT INTO users VALUES(4,'$surname','$password')";


    $pdo->exec($sql);

    echo("inserted successfully");

}catch(Exceoption $e){

    echo "Error inserting data" .$e->getMessage();
}


?>