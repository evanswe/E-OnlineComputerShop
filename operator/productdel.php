<?php
$p = new Product();
$p->Id = $_GET['id'];
$p->SelectById();
$des = "files/" . $p->Description;


$pic = "images/" . $p->Picture;
//echo $pic;
	
	if($p->Delete()){
		unlink($des);
		unlink($pic);
		Redirect("?o=product_add&ms=Deleted Successfully");
	}else{
		Redirect("?o=product_add&ms={$p->Err}");
	}





?>