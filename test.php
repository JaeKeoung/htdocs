<?php
//    phpinfo();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>document</title>
        <style>
            .gugudan:first-child {background-color: #0f1;}
            .gugudan:nth-child(2) {background-color: #0f2;}
            .gugudan:nth-child(3) {background-color: #0f3;}
            .gugudan:nth-child(4) {background-color: #0f4;}
            .gugudan:nth-child(5) {background-color: #0f5;}
            .gugudan:nth-child(6) {background-color: #0f6;}
            .gugudan:nth-child(7) {background-color: #0f7;}
            .gugudan:last-child {background-color: #0f8;}
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
                print $week[1]. "<br>";
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
                    print $member["age"];//왠지 출력이 안된다.
                    print "<pre>";
                    print_r ($member);//print_r은 배열을 보기 편하게 출력하게 해주는 함수이다.
            
            ?>
        </ul>
        <div>
            <?php
                //for문
                $count = 0;
                for($i = 2; $i < 10; $i++) {
                    print "<p class = 'gugudan'>";
                    for($j = 1; $j < 10; $j++) {
                        print $i."*".$j."=".$i * $j."<br>";
                    }
                    print "</p>";
                    $count++;
                }
            ?>
        </div>
        <?php
            $a = array("월", "화", "수", "목", "금", "토", "일");
            foreach($a as $key){
                print $key."<br>";
            }
        ?>
    </body>
</html>