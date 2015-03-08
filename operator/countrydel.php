<?php 
	$country = new Country();
	$country->Id = $_GET['id'];
	if($country->Delete()){
		//echo "<br>Success";
		Redirect("?o=country&ms=Deleted Successfully");
	}else{
		Redirect("?o=country&ms={$country->Err}");
	}
?>