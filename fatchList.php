<?php
include_once 'listFatch.php';
//if (isset($_POST['member[]'])) {
//    $Dsql = "delete from member where name='{$_POST['member[]']}'";
//}

//if(sizeof($member) == "") {
//    echo '<script language="javascript">';
//    echo 'alert("선택한 항목이 없습니다.");';
//    echo 'history.back();';
//    echo '</script>';
//}

//for($i = 0; $i < sizeof($member); $i++) {
//    $sql = "delete from member where me_id=$member[$i]";
//    echo $sql;
//}

$recordAry = $_POST['member[]'];//레코드 번호값 얻어옴.
$deltAry = explode("", $recordAry);//구분자로 번호값 분할

for($i = 0; $i < sizeof($member); $i++) {
   $sql = "delete from member where me_id=".$deltAry[$i];
   $result = QueryExe($sql);
}
$pdo->query($sql);
?>
<script>
    location.href='listFatch.php';
</script>