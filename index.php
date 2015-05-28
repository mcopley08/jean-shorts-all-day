<?php

$requested_url = "http://www.ratemyprofessors.com/search.jsp?queryoption=HEADER&queryBy=teacherName&schoolName=" + $_GET['schoolName'] + "&profsid=&query=" + $_GET['firstName'] + "+" + $_GET['lastName'];
$rate_my_professor = file_get_contents($requested_url);
echo $rate_my_professor;

echo "hey everybody";
?>