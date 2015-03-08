<?php	session_start();
	require_once('DAL/DBConnect.php');
	require_once('DAL/dalCard.php');
	require_once('DAL/dalCategory.php');
	require_once('DAL/dalCity.php');
	require_once('DAL/dalCountry.php');
	require_once('DAL/dalComment.php');
	require_once('DAL/dalProduct.php');
	require_once('DAL/dalPurchase.php');
	require_once('DAL/dalPurchasereport.php');
	require_once('DAL/dalRating.php');
	require_once('DAL/dalSubcategory.php');
	require_once('DAL/dalUnit.php');
	require_once('DAL/dalUser.php');
	//require_once('DAL/dalReport.php');	
	
	require_once('controller/functions.php');
	
	if(isset($_SESSION['id'])) {
		$usr = new User();
		$usr->Id = $_SESSION['id'];
		$usr->SelectById();
		//echo $usr->UserType;
	}
?>