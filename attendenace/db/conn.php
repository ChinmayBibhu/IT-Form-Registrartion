<?php

$host='127.0.0.1';
$db='attendence';
$user='root';
$pass=' ';
$charset='utf8mb4';

$dsn="mysql:host=$host;dbname=$db;charset=$charset";

try
{
    $pdo=new PDO($dsn, $user, $pass);
    //echo 'Database connection established';---this statement just for checking if db is connected or not
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOExcetion $e)
{
    //throw new PDOExcetion($e->getMessage());
    echo "<h1 class='text-danger'>No Database Found</h1>";
}

require_once 'crud.php';
$crud=new crud($pdo);

?>