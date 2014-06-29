<?php
$hostname = "localhost";
$username = "root";
$password = "비번";
$dbname = "customer";
 
$connect = mysql_connect($hostname, $username, $password) or die("MySQL Server 연결에 실패했습니다");
mysql_select_db($dbname,$connect);
 mysql_query("set names utf8");
 
 $id=$_REQUEST['id'];
 $id_password=$_REQUEST['password'];
 
 $sql="select * from customer_id where password=sha($id_password);";
 $result=mysql_query($sql);
 
 $xmlcode = "<?xml version = \"1.0\" encoding = \"utf-8\"?>\n";
 $xmlcode .="<customer>\n";
 while($obj = mysql_fetch_object($result))
 {
  $check_id=$obj->id;
  $check_password=$obj->password;
  
  printf("succes");
  echo "<br \>";
  $xmlcode .= "<id>$check_id</id>\n";
  $xmlcode .= "<password>$check_password</password>\n";
 
 }
 $xmlcode .="</customer>\n";
 //$xmlcode .="<RESULT>$result</RESULT>\n";
 $dir = "C:\Program Files (x86)\Apache Software Foundation\Apache2.2\xmlTest"; //파일이 있을 디렉토리
 $filename = $dir."/insert.xml"; //파일 이름
 
 file_put_contents($filename, $xmlcode);
 mysql_close($connect);
 
 ?>
 
[출처] (Android:안드로이드)login 하기 완성본.. (xml,php,mysql 연동 및 파싱작업) 로그인|작성자 강문성 blog