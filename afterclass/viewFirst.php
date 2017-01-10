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
//        $name = htmlspecialchars($_POST['name']);//태그같은 것을 입력했을 때, 적용되게 해선 안된다.
        $name = $_GET['name'];
        print $name;
        ?>
    </body>
</html>
