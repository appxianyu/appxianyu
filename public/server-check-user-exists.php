<?php
	
	//接受用户名	
	$username = $_GET['username'];

	$pdo = new PDO('mysql:host=localhost;dbname=lamp;charset=utf8','root','');

	$stmt = $pdo -> prepare('select * from users where name = ?');

	$arr = [$username];

	$stmt->execute($arr);

	//获取结果
	$res = $stmt->fetch();

	//判断
	if(empty($res)){
		echo '0';
	}else{
		echo '1';
	}