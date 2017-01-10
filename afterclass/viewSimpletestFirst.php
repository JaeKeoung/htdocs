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
            $id = $_POST['id'];
            $password = $_POST['password'];
            print '환영합니다'.$id.'님<br/>';
            
            if(isset($_POST['sex'])) {
                print $id.'님의 성별은 '.$_POST['sex']."자로 확인되었으며<br/>";
            } else {
                print '성별을 선택해 주십시오.<br/>';
                if((!isset($sex))||(!isset($school))) {
                    print "<form action='radiobtnFirst.php'> <button>돌아가기</button> </from> <br/>";
                } else {
                    print "";
                }
            }
            
            if(isset($_POST['hobby'])) {
                $hobby = implode($_POST['hobby'], '와 ');
                print $id.'님의 취미는 '.$hobby.'으로 확인되었습니다.';
            } else {
                print $id.'님의 취미는 선택사항엔 없는 것으로 확인되었습니다.';
            }
        ?>
    </body>
</html>
