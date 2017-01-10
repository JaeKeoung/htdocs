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
            if(($_POST['city']=='')||($_POST['city']==NULL)) {
                echo "<script> alert( '구역을 선택해주십시오.' );";
                echo "location.href='./selectFirst.php'</script>";
            }  else {
                print $_POST['city'].'에서 살고계십니다.';
            }
        ?>
    </body>
</html>
