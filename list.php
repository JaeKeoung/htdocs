<?php
    include 'kccdb.php';
    $search = '%'.$_POST["search"].'%';
    print $search."<br>";
    $sql = "select * from member where last_name LIKE :last_name OR first_name LIKE :first_name";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(":last_name", $search, PDO:: PARAM_STR);
    $stmh->bindValue(":first_name", $search, PDO:: PARAM_STR);
    $stmh->execute();
    $count = $stmh->rowCount();
    
    print ($count."건 찾았습니다.");
?>