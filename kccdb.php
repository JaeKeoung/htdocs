<?php
    try {
    $pdo = new PDO('mysql:host=localhost; dbname=kcc; charset=utf8', 'root', '');
            print "접속 성공";
    $pdo = null;}
    catch(PDOException $Exception) {
        die("접속 오류: ".$Exception->getMessage());
    }
            
?>