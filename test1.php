<!DOCTYPE html>
<?php
    try {
        $pdo = new PDO('mysql:host=localhost; dbname:member; charset:utf-8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        print '접속 성공<br>';
} catch (Exception $Eception) {
    die('접속 종료<br>'.$Eception->getMessage().'<br>');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>20502최재경</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>
            $ready.function({
                var re_id = /^[a-z0-9_-]{3,16}$/; //아이디 검사
            });
            
        </script>
    </head>
    <body>
        <form action="list.php" method="post">
            <span>아이디</span>
            <input type="text" name="re_id"><br>
            <span>비밀번호</span>
            <input type="password" name="password"><br>
            <span>이름</span>
            <input type="text" name="name"><br>
            <span>핸드폰 번호</span>
            <input type="text" name="phoneNumber"><br>
            <input type="submit" value="전송">
        </form>
        <?php
//        $idx = isset($_POST[re_id]);
//        $PW = isset($_POST[password]);
//        $name = isset($_POST[name]);
//        $PN = isset($_POST[phoneNumber]);
            $sql = 'insert into "member"("idx","password","name","phoneNumber") values ($idx, $PW, $name, $PN)'
        ?>
    </body>
</html>
