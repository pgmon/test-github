<?php /* <meta content="charset=UTF-8"> */ ?>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];

if (strpos($ua,'iPhone')) {
	//iPhone
	include('mobile.php');
} else {
	//PC and iPad and Android Tablet
	include('screen.php');
}
?>