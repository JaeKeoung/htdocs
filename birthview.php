<?php
$birthYear = $_POST['birthYear'];
$birthMonth = $_POST['birthMonth'];
$birthDay = $_POST['birthDay'];

    if($birthYear != ""){
        print '생년은'.$birthYear."년 이고, ";
    } else {
        print "생년을 선택해주십시오.";
    }
    
    if($birthMonth != ""){
        print $birthMonth."월";
    } else {
        print "월을 선택해주십시오.";
    }
    
    if($birthDay != ""){
        print $birthDay."일에 태어났습니다.";
    } else {
        print "일을 선택해주십시오.";
    }
?>