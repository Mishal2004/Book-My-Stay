<?php
    try{
    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "hotel-booking");

    //user
    define("USER", "root");

    //password
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST."; dbname=" .DBNAME."",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //to check any error in connecting to database

    }
    catch(PDOException $e){
        echo "Error:".$e->getMessage();
    }


?>