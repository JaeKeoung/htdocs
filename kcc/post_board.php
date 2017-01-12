<?php
   include_once 'inc/dbCon.php';
    
   $subject = $_POST['subject'];
   $writer = $_POST['writer'];
   $content = $_POST['content'];
   $date = date("Y-m-d",mktime(0,0,0,date('m'),date('d'),date('y')));
   $sql = "insert into board (subject, writer, content, date) values (:subject, :writer, :content, :date)";
   
   $stmh = $pdo->prepare($sql);
   $stmh->bindValue(":subject",$subject);
   $stmh->bindValue(":writer",$writer);
   $stmh->bindValue(":content",$content);
   $stmh->bindValue(":date",$date);
   $stmh->execute();
   
//   print '제목: '.$subject.'<br/>';
//   print '작성자: '.$writer.'<br/>';
//   print '내용: '.$content.'<br/>';
//   print '날짜: '.$date.'<br/>';
   
    echo "<script>location.href='./board.php'</script>";
?>