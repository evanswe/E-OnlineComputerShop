<div class="main_content">
<?php 
$p = new Product();
$r = $p->Select();
echo count($r);
?>

<div class="slide">

<ul class="ppt">
<?php
if($r != ""){
	for($i=0; $i<6; $i++){
?>
  <li><a href="?p=Prdetails&id=<?php echo $r[$i][0]; ?>" target="_blank"><img src="images/<?php echo $r[$i][10]; ?>" alt="Product one" height="260" width="500" /></a></li>
<?php 
	}
}
?>
</ul>

<script type="text/javascript" src="SpryAssets/j libarary.js"></script>
<script type="text/javascript">
$('.ppt li:gt(0)').hide();
$('.ppt li:last').addClass('last');
var cur = $('.ppt li:first');

function animate() {
	cur.fadeOut( 1000 );
	if ( cur.attr('class') == 'last' )
		cur = $('.ppt li:first');
	else
		cur = cur.next();
	cur.fadeIn( 1000 );
}


$(function() {
	setInterval( "animate()", 2000 );
} );
</script>

</div>
<!--End of slide in main content-->

<div class="prd1">
<h2>Main Category</h2>
<img src="images/pd1.jpg" height="160" width="180" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:10px 0px 0px 10px;" />
</div>


<div class="prd1">
<h2>Main Category</h2>
<img src="images/pd2.jpg" height="160" width="180" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:10px 0px 0px 10px;" />
</div>

<div class="prd1" style="margin:80px 0px 0px 40px;">
<h2>Main Category</h2>
<img src="images/pd3.jpg" height="160" width="180" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:10px 0px 0px 10px;" />
</div>

<div class="prd1" style="margin:80px 0px 0px 40px;">
<h2>Main Category</h2>
<img src="images/pd4.jpg" height="160" width="180" style="float:left; position:relative; padding:0px 0px 0px 0px; margin:10px 0px 0px 10px;" />
</div>


</div>
