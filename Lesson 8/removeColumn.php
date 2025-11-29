<?php 

$host = "localhost";
$db = "eronaphp";
$user = "root";
$pass = "";


try{
     
    $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$pass);

 

   $sql = "ALTER TABLE  users DROP COLUMN TEST";


    $pdo->exec($sql);

    echo("kolona eshte shtuar me sukses");

}catch(Exceoption $e){

    echo "Error inserting data" .$e->getMessage();
}


?>