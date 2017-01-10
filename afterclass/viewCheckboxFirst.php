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
            if(isset($_POST['hobby'])) {
                $hobby = implode($_POST['hobby'], '와 ');//'와 ', $_POST['hobby']로 거꾸로 써도 괜찮다.
                print '저의 취미는 '.$hobby.'입니다.';
            } else {
                print '선택사항중 저의 취미는 없습니다.';
            }
        ?>
    </body>
</html>
