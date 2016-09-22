<?php
    $name = '%'.$_POST["search"].'%';
    include 'kccdb.php';
   
    
    $spl = "select * from member where last_name LIKE:last_name OR first_name LIKE:first_name;";
    $stmh = $pdo->prepare($spl);
    $stmh = $pd0->bindvalue(": last_name", $search, $search.PDD:: PARAM_STR);
    $stmh = $pd0->bindvalue(": last_name", $search, $search.PDD:: PARAM_STR);
    $stmh->execute();
    $count = $stmh->rowcount();
    
    print ($count."건 찾았습니다.");
?>