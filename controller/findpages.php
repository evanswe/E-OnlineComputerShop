<?php 
if(isset($_GET['p'])){
	require_once("view/".$_GET['p'].".php");
}else if(isset($_GET['a']) && (isset($_SESSION['id']) && ($usr->UserType == "a")) ){
	require_once("admin/".$_GET['a'].".php");
}else if(isset($_GET['u']) && (isset($_SESSION['id'])) ){
	require_once("user/".$_GET['u'].".php");
}else if(isset($_GET['o']) && (isset($_SESSION['id'])) && (($usr->UserType == "a") || ($usr->UserType == "o"))){
	require_once("operator/".$_GET['o'].".php");
}else{
	require_once("view/home.php");
}
?>