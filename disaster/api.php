<?php
$ch = curl_init();
$url = 'http://openapi.mpss.go.kr/openapi/service/disasterDistrictService/LocalGovUseDisasterDistrictItemCrntSt'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=traLZtwV%2Flr%2BFxhNp6W6GeRpYDybEpKfs%2F3X4jnYPkG1T1HYPiYlH4ZeY3jAw7TFJylqX3mj6ooM%2F4OWZnOvcw%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('mgmtNo') . '=' . urlencode('491022010017'); /*재해위험지구관리번호*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>