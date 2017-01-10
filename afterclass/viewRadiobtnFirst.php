<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//            $sex = $_POST['sex'];
//            $school =  $_POST['school'];
            if(isset($_POST['sex'])) {
                print $_POST['sex'].'자 이십니다.<br/>';
            } else {
                print '성별을 선택해주십시오.<br/>';
            }
            
            if(isset($_POST['school'])) {
                print $_POST['school'].'를 선택하셨습니다.';
            } else {
                print '학교를 선택해주십시오.<br/>';
                if((!isset($sex))||(!isset($school))) {
                    print "<form action='radiobtnFirst.php'> <button>돌아가기</button> </from>";
//                 echo "<script>location.href='./radiobtnFirst.php'</script>";
                } else {
                    print "";
                }
            }
            
            
        ?>
    </body>
</html>
