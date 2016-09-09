<!DOCTYPE html>
<?php
    require("testSession.php");
//    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            print "이름: ";
            print $_SESSION["name"]."<br>";
            print "등급: ";
            print $_SESSION["level"];
        ?>
    </body>
</html>
