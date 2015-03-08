<?php 
error_reporting("products.php");
?>
<style type="text/css">
#main_box{
	width:200px;
	height:240px; 
	background-color:#F5F5F5;
	float:left;
	margin:22px 6px 8px 30px;
	float:left; position:relative;
}
#img{
	margin:6px auto;
}
#name{
	width:100%; float:left; text-align:center; font-size:18px; background-color:#CDFDCC; margin:0px 0px 4px 0px; height:16%;
}
#des{
	height:40px; width:80%; margin:-8px 10%; background-color:; border-top:1px #000 solid;
}
#paging a{
	text-decoration:none;
}
</style>
<div class="main_content" style="width:740px;">

<!--	<div id="main_box">
    	<h1 id="name">Product Name</h1>
	    <img id="img" width="160" height="130" src="images/21671409162036dell2.jpg" />
        <div id="des">
        	<p><b>Price: </b> </p>
        </div>
    </div>
-->

			<?php
				$sc = new SubCategory();
				$sc->Id = $_GET['id'];
				$sc->SelectById();
				echo "<h2>{$sc->Name}</h2>";
				
				$pdt = new Product();
				$pdt->SubcategoryId = $_GET['id'];
				$r = $pdt->Select();
					$count = 1;
				if($r != ""){
					$pp = 9;
					if(isset($_GET['page'])){
						$start = $pp * $_GET['page'];	
					}else{
						$start = 0;	
					}
					
					if(count($r) > ($start + $pp)){
						$end = $start + $pp;
					}else{
						$end = count($r);	
					}
					
					for($i = $start; $i < $end; $i++) {
						
						echo '<div id="main_box">';
						$count++;
				?>         
					<h1 id="name"><a href=""><?php echo $r[$i][1]; ?></a></h1>
					<a href=""><img id="img" width="160" height="130" src="images/<?php echo $r[$i][10]; ?>" /></a>
	
					<div id="des">
						<p><b>Price: <?php echo $r[$i][3]; ?></b> </p>
					</div>
					
				</div>
				<?php } }else{echo "<h4>No products</h4>";}?>
            
			<br />
            <div id="paging" style="width:740px; float:left; position:relative">
            <?php
				if(count($r) > 9){
				$pre = $start / $pp;
				if($pre > 0){
					$pre--;	
					echo "<a href='?p=products&id={$_GET[id]}&page={$pre}'>Prev&nbsp;&nbsp;</a>";
				}else{
					echo "<a href='#'>Prev&nbsp;&nbsp;</a>";
				}
				
				$count = 0;
				for($i = 0; $i < count($r); $i = $i + $pp)
				{
					if($start == $i) {
						echo "<a href='?p=products&id={$_GET[id]}&page={$count}' style='color:red;'>" . ($count + 1) . "&nbsp;&nbsp;</a>";
					}else{
						echo "<a href='?p=products&id={$_GET[id]}&page={$count}'>" . ($count + 1) . "&nbsp;&nbsp;</a>";	
					}
					$count++;
				}	
				
				if($end < count($r)) {
					$next = $start / $pp;
					$next++;
					echo "<a href='?p=products&id={$_GET[id]}&page={$next}''>Next&nbsp;&nbsp;</a>";
				}
				else{
					echo "<a href='#'>Next&nbsp;&nbsp;</a>";
				}
				}
			?>
			</div>



</div>
