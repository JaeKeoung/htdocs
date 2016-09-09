<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //mysql함수(아마 7버전 쯤에서 더이상 지원을 하지 않는다 한다.)
            /*$con = mysql_connect('localhost', 'root', '') or die('접속할 수 없습니다.');
            print "접속 성공";
            mysql_select_db('php');
            mysql_close($con);*/
        
            /*$mysqli = new mysqli('localhost','root','','php');
            if($mysqli -> connect_errno) {
                die("접속할 수 없습니다.");
            }
            print "접속 성공";
            $mysqli ->close();*/
        
            //지금 게 셋 중에서 가장 중요
            $pdo = new PDO('mysql:host=localhost; dbname=php; charset=utf8', 'root', '');
            print "접속 성공";
            $pdo = null;
        ?>
    </body>
</html>
