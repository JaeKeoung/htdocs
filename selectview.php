<?php
    $location = $_POST['location'];
    if(isset($location)){
        print '지역은'.$location;
    } else {
        print "지역을 선택해주십시오.";
    }
?>