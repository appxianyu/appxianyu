<?php 
 
	if(empty($_GET["year"]) || empty($_GET["month"]) ){echo "未知错误！";exit();}
	$year=$_GET["year"];
	$month=$_GET["month"];
 
	$db=new PDO("mysql:host=localhost;dbname=xianyu","root","");
	$db->query("utf8");
 
	$result=$db->query("select day from list where year='$year' and month='$month'")->fetchAll();
 
	$text="";
	for ($i=0; $i < count($result); $i++) { 
		$text.=$result[$i]['day'].",";
	}
	echo $text;
 
 ?>
