<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "test";
    $dsn = "mysql:host=$host:dbname=$db;charset=utf8";
    
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "db연결성공";
    } catch (PDOException $e) {
        echo '접속불가'.$e->getMessage();
    }
?>