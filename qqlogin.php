<?php
error_reporting(0);

require 'qqlogin.class.php';
$login=new qq_login();
if($_GET['do']=='qrlogin'){
	$login->qrlogin();
}
if($_GET['do']=='getqrpic'){
	$login->getqrpic();
}
if($_GET['do']=='getwxpic'){
	$array = $login->getwxpic();
}
if($_GET['do']=='wxlogin'){
	$array = $login->wxlogin();
}
echo json_encode($array);