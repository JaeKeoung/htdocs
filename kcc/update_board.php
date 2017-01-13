<?php
    include_once 'inc/dbCon.php';
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $idx = $_POST['idx'];
    $sql = "update board set subject=:subject, content=:content where idx=:idx";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(":subject", $subject);
    $stmh->bindValue(":idx", $idx);
    $stmh->bindValue(":content", $content);
    $stmh->execute();
    
    echo "<script>location.href='./board.php'</script>";
?>