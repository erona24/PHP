<?php
    
    $user="root";
    $pass="";
    $server="localhost";
    $dbname="mms";

    try{

        $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
        echo("connected");

    }catch(PDOException $e){
        echo"ERROR" . $e->getMessage();
    }



?>