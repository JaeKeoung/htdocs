<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=test; charset=utf8;','root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    print '접속성공 <br>';
} catch (Exception $Exception) {
    die('접속오류: '.$Exception->getMessage().'<br');
}
?>