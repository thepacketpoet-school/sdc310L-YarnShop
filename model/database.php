<?php
/*
    Haley's Hobby Yarn & Thread - Database Connection Model
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Database connection using PDO
*/

function get_db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yarn_shop";
    
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
