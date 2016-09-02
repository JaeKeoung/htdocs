<!document type>
<html>
    <head>
        <meta charset="utf-8">
        <title>document</title>
    </head>
    <body>
        <?php
            $name = $_POST["onName"];
            $Password = $_POST["password"];
            
            print nl2br($_POST["honbun"])."<br>";//nl2br을 써야지 본문에 입력한 내용의 enter가 먹는다.
            print "$name 님 환영합니다.<br>";
            
            if(isset($_POST["hobby"])) {
                $hobby = implode($_POST["hobby"]);
                print "저의 취미는 ".$hobby."입니다.";
            } else {
                print "저의 취미는 없습니다.";
            }
        ?>
    </body>
</html>
