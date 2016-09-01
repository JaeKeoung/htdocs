<?php
//    phpinfo();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>document</title>
        <style>
            <?php
                $bgColor = " ";
                $CCode = array("1","2","3","4","5","6","7","8");
                switch(count) {
                    case 1:
                        $bgColor = "#0f".$CCode[0];
                    case 2:
                        $bgColor = "#0f".$CCode[1];
                    case 3:
                        $bgColor = "#0f".$CCode[2];
                    case 4:
                        $bgColor = "#0f".$CCode[3];
                    case 5:
                        $bgColor = "#0f".$CCode[4];
                    case 6:
                        $bgColor = "#0f".$CCode[5];
                    case 7:
                        $bgColor = "#0f".$CCode[6];
                    case 8:
                        $bgColor = "#0f".$CCode[7];
                }
                    
            ?>
            .gugudan {background-color: <?php echo $bgColor; ?>;}
        </style>
    </head>
    <body>
        <ul>
            <li>1번</li>
            <li>2번</li>
            <?php
                print "와아";
            ?>
            <li>3번째 예제<?php
                print PHP_VERSION;
                print PHP_OS;
                define("HALLO", "안녕하세요");
                print HALLO. "<br>";
                define("_18", "신발");
                print _18. "<br>";
                print __DIR__;
                
            ?></li>
            <li>4번</li>
            <?php
                $data = "안녕하세요";
                $data1 = 1;
                print $data. "<br>";
                print $data1. "<br>";//자동으로 타입 변환된다.
                $week[] = "월";
                $week[] = "화";
                //두 코드 모두 같은 의미이다.
                /*
                $week[1] = "월";
                $week[2] = "화";
                */
            
                print $week[0]. "<br>";
                print $week[1];
                //array함수 사용하기
                $month = array(1,2,3,4,5,6,7,8,9,10,11,12, "월");
            
                //이건 PHP 5.4버전 이상부터 사용 가능하다.
                $year = [2015, 2016, 2017, "년"];
            
                //배열 초기화-주로 로그인 시킨 것을 로그아웃시킬 때 자주 쓴다.
                $month = array();
            
                //연관배열
                $member["name"] = "member";
                $member["age"] = 3;
                $member["height"] = 150;
                    print $member["age"];
                    print "<pre>";
                    print_r ($member);
            
            ?>
        </ul>
        <p class = "gugudan">
            <?php
                //for문
                $count = 0;
                for($i = 2; $i < 10; $i++) {
                    for($j = 1; $j < 10; $j++) {
                        print $i."*".$j."=".$i * $j."<br>";
                    }
                    $count++;
                }
            ?>
        </p>
    </body>
</html>