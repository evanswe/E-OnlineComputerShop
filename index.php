<?php include_once("controller/config.php"); 
//$_SESSION['xy'] = "Hello World";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>This is Project</title>
<style type="text/css">


ul.ppt {
	position: relative;
	padding:0px 0px 0px 0px;
	margin:0px 0px 0px 0px;
	width:500px;
	height:260px;
}
.ppt li {
	list-style-type: none;
	position: absolute;
	top: 0;
	left: 0;
}
.ppt img {
	border: 1px solid #e7e7e7;
	padding: 5px;
	background-color: #ececec;
}

.menu1 a:hover{
	background-color:#000;
	color:#FFF;
}

</style>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">

</script>


<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>





<body style="padding:0px; margin:0px;">

        
<center>
<div class="mainlayout">
<div class="header">
<img src="images/logosym.png" height="70" width="80" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:5px 0px 0px 10px;" />
<img src="images/logo2.png" height="80" width="200" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:0px 0px 0px 0pxl;" />
<?php 
if(isset($_POST['login'])){
	$u = new User();
	$u->Email = $_POST['email'];
	$u->Password = $_POST['pass'];
	if($u->Login()){
		$_SESSION['id'] = $u->Id;
		Redirect("?u=welcome");
	}
}


if(isset($_SESSION['id'])){
	echo '<a href="?p=logout" style="float:right; position:relative; padding:0px 0px 0px 0px; margin:11px 4px 0px 0px; height:20px; width:100px; background-color:#FFFFB0;">Logout</a>';
}else{
?>

    <form action="" method="post">
        <input type="submit" name="login" value="Login" style="float:right; position:relative; padding:0px 0px 0px 0px; margin:11px 4px 0px 0px; height:20px; width:100px; background-color:#FFFFB0;"/>
        <input type="password" name="pass" placeholder="Your Password" style="float:right; position:relative; padding:0px 0px 0px 0px; margin:11px 4px 0px 0px; height:20px; width:100px; background-color:#FFFFB0;" />
        
        <input type="text" name="email" placeholder="Your Email" style="float:right; position:relative; padding:0px 0px 0px 0px; margin:11px 4px 0px 0px; height:20px; width:100px; background-color:#FFFFB0;" />
    </form>
    <?php }?>
</div>
<!--End of header-->

<div class="menu1">
  <ul id="MenuBar1" class="MenuBarHorizontal">

    <li><a href="?o=home">Home</a></li>
    
    <li><a href="?p=about">About</a></li>
    <li><a href="?o=login">Login</a></li>
    <li><a href="?p=hotline">Hotlines</a></li>
    
    
    <li><a class="MenuBarItemSubmenu" href="#">Menu</a>
      <ul>
        <li><a href="?o=country">Country</a></li>
        <li><a href="?o=city">City</a></li>
        <li><a href="?o=category">Category</a></li>
       	<li><a href="?o=subcategory">Subcategory</a></li>
       	<li><a href="?o=product_add">Add Products</a></li>
       	<li><a href="?o=signup">Sign Up</a></li>
      </ul>
    </li>
    
    
    <li><a class="MenuBarItemSubmenu" href="#">Menu</a>
      <ul>
        <li><a href="?o=country">Country</a></li>
        <li><a href="?o=city">City</a></li>
        <li><a href="?o=category">Category</a></li>
       	<li><a href="?o=subcategory">Subcategory</a></li>
       	<li><a href="?o=signup">Sign Up</a></li>
       	<li><a href="?o=product">Product</a></li>
      </ul>
    </li>
    

    <li><a class="MenuBarItemSubmenu" href="#">Menu</a>
      <ul>
        <li><a href="?o=country">Country</a></li>
        <li><a href="?o=city">City</a></li>
        <li><a href="?o=category">Category</a></li>
       	<li><a href="?o=subcategory">Subcategory</a></li>
	  </ul>
    </li>    
   </ul>
</div>
<!--End of menu1-->



<div class="left_col">
<div class="recent_name">
Products
<?php //echo "Hello"; 
echo $_SESSION['xy'];
?>
</div>

<div class="product" style="height:auto">
  <div id="Accordion1" class="Accordion" tabindex="0" style="margin:6px 0px 0px 0px;" >
  <?php 
  $c = new Category();
  $sc = new SubCategory();
  
  $r = $c->Select();
  if($r != ""){
	  for($i=0; $i<count($r); $i++){
  ?>
    <div class="AccordionPanel">
      <div class="AccordionPanelTab"><?php echo $r[$i][1]; ?></div>
      <div class="AccordionPanelContent">
      	<?php 
		$sc->CategoryId = $r[$i][0];
		$rr = $sc->Select();
		if($rr != ""){
			for($j=0; $j<count($rr); $j++){
		?>
      		<a href="?p=products&id=<?php echo $rr[$j][0]; ?>&page=0" style="float:left; position:relative; width:200px;"><?php echo $rr[$j][1]; ?></a><br />
      	<?php }
		}?>
      </div>
    </div>
  <?php }
  }?>  
  </div>
  <!--End of Accordion Panel-->
</div>
<!--End of product in left_col-->

<?php 
if(isset($_GET['o']) && ($_GET['o'] == "product_add")){
}else{
?>
<div class="recent">
<div class="recent_name2">
Recent Product
</div>
<!--End of recent product name in recent-->
<?php 
$pdt = new Product();
$lastProducts = $pdt->Select();
if($lastProducts != ""){
	for($i=0; $i<2; $i++){
?>
		<div class="product1" style="height:auto">
		<h3><?php echo $lastProducts[$i][1]; ?></h3>
		<img src="images/<?php echo $lastProducts[$i][10]; ?>" width="166" height="142" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:6px 0px 0px 7px;" />
		</div>
		<!--End of product1, product2 & product3--> 
<?php }
}?>

</div>
<!--End of recent-->
<?php }?>
</div>


<!--End of left_col-->
<!--=================================================================================================================-->



<?php 
include_once("controller/findpages.php");
?>

<!--End of main content-->
<!--==================================================================================================================-->



<?php 
if(isset($_GET['o']) || (isset($_GET['p']) && ($_GET['p'] == "products"))){
}else{
?>
<div class="right_col">

<div class="add1">
<img src="images/add1.jpg" height="280" width="170" />
</div>

<div class="add2">
<img src="images/add2.jpg" height="130" width="170" />
</div>


<div class="add3">
<a href="http://www.google.com" target="_blank"><img src="images/add3.gif" height="400" width="170" /></a>
</div>
</div>
<?php }?>
<!--End of right column-->
<!--==================================================================================================================-->


<div class="footer">
<p style="float:right; margin:6px 4px 0px 0px">Developed by DIU</p>
</div>
<!--End of footer-->
<!--==================================================================================================================-->

</div>
<!--End of mainlayout-->
</center>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>

</body>
</html>
