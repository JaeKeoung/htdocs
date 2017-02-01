<?php
    include_once 'inc/dbCon.php';
    $idx = $_GET['idx'];
    $sql = 'delete from board where idx=:idx';
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(":idx", $idx, PDO::PARAM_INT);
    $stmh->execute();
    
    echo "<script>location.href='./board.php'</script>";
?>