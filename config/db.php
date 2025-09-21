<?php
$dsn = "mysql:host=localhost;dbname=travel";
$user = "root";
$password = "";

try{
    $pdo = new PDO($dsn , $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "connect failed !" . $e->getMessage();
}