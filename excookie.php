<?php
$name = 'userid';
$value= 'rharris';
$expire=strtotime('+1 year');
$path='/';
setcookie($name,$value,$expire,$path);
	setcookie("testCookie",$value,time()+3600*24);
	//get the value of a cookie from browser
	$userid= $_COOKIE['userid'];
	var_dump($userid);
	//delete a cookie from the browser
	$expire=strtotime('-1 year');
	setcookie('userid','',$expire,'/');
?>