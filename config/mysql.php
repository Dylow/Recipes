<?php

const MYSQL_HOST = '127.0.0.1';
const MYSQL_PORT = 8889;
const MYSQL_NAME = 'we_love_food';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = 'root';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}


