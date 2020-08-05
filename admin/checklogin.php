<?php
function clearLoggedUser(){
	unset($_SESSION['account']);
}
function getLoggedUser(){
	$user = isset($_SESSION['account']) ? $_SESSION['account'] : 0;
	return $user;
}
function setLoggedUser($user){
	$_SESSION['account'] = $user;
}

function checkLoggedUser(){
	$user = getLoggedUser();
	if (!$user) {
		echo "Ban phai dang nhap <a href=\"login.php\">Login</a>";
		exit();
	}
	return $user;
}