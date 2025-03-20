<?php


$dsn = "mysql:host=DESKTOP-S0V0MVS\SQLEXPRESS;dbname=LibraryDB";


$dbusername = "root";


$dbpassword = "";


try {

   $pdo = new PDO($dsn, $dbusername, $dbpassword);
   

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

   echo "Connected successfully";
} catch (PDOException $e) {

   echo "Connection failed: " . $e->getMessage();
}