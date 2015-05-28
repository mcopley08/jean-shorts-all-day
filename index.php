<?php
header('Access-Control-Allow-Origin: *');
ini_set('allow_url_fopen', 1);

$requested_url = "http://www.ratemyprofessors.com/search.jsp?queryoption=HEADER&queryBy=teacherName&schoolName=" + $_GET['schoolName'] + "&profsid=&query=" + $_GET['firstName'] + "+" + $_GET['lastName'];
$rate_my_professor = file_get_contents($requested_url);
echo $rate_my_professor;

echo $_GET['schoolName'];
echo $_GET['firstName'];
echo $_GET['lastName'];
echo "hey everybody";
?>