<?php 

$host = "localhost";
$db = "eronaphp";
$user = "root";
$pass = "";


try{
     
    $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$pass);

 

   $sql = "DROP TABLE users";


    $pdo->exec($sql);

    echo("tabela eshte fshier");

}catch(Exceoption $e){

    echo "Error" .$e->getMessage();
}


?>