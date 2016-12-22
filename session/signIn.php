<?php
include_once 'config.php';
$member = "insert into member set 
        id='{$_POST['SIid']}', 
        password='{$_POST['SIpassword']}', 
        nickname='{$_POST['SInickname']}'";
 print $member;       
//$stmh = $pdo->query($member);

print "<script>location.herf='main.php'</script>"
?>