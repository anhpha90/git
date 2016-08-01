<?php
@session_start();
$user = $_GET['user'];
$pass = $_GET['pass'];
if($user!=null){
	$_SESSION['mes'] = $user.' đã đăng nhập';
	header('location: index.php');
	$_SESSION['user'] = $user;
	
}
else{
	header('location: index.php');
	echo 'Go user';
}

?>