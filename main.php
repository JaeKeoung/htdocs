<!document type>
<html>
    <head>
        <meta charset="utf-8">
        <title>document</title>
    </head>
    <body>
        <?php
        //불러오기
            //require ("inc.php");
        //include는 에러메세지가 뜨지만 require는 그냥 실행종료가 되어버린다.
            //include ("inc.php");
            //require_once ("inc.php");
            include_once ("inc.php");
            //기억나는 거 아무거나 쓰자.
            print "$name 님 <br>";
            print "$message <br>";
        ?>
    </body>
</html>
