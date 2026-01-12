<?php
/*
    Haley's Hobby Yarn & Thread - Database Connection
    SDC310L Course Project
    Author: Haley Archer
    Date: January 2026
    Description: PDO database connection for yarn shop
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yarn_shop";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
