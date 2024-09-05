<?php

define('DB_HOST', 'localhost')
define('DB_USER', 'root')
define('DB_PASS', 'rooot')
define('DB_NAME', 'gemilang')

try
{
    $dbh = new PDO("mysql:host=".DB_HOST."dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf-8"));
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>