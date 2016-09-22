<?php
    try {
    $pdo = new PDO('mysql:host=localhost; dbname=kcc; charset=utf8', 'root', '');
    $pdo->setAttribut(PDO::ATTEER_EMULATE_PREPARES, FALSE);
        print "접속 성공";
    }
    catch(PDOException $Exception) {
        die("접속 오류: ".$Exception->getMessage());
    }
            
?>