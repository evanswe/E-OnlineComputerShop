<style type="text/css">
	#btn{
		width:140px;
		height:30px;
		background-color:#0C9;
		color:#FFF;
		font-weight:bold;
		margin:4px 0px 0px 202px;
	}
	#borderRight{
		border-right:1px #CCC solid;
	}
</style>
<div class="main_content" style="width:740px;">
<br>
<?php 
	$product = new Product();
	$unit = new Unit();
	$subCategory = new SubCategory();
	$category = new Category();
	
	$product->Id = $_GET['pid'];
	$product->SelectById();
?>
	<table width="600" cellspacing="10">
    	  <tr>
          	<td colspan="2">
            	<?php 
					if(isset($_SESSION["id"])){
									if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
										$c = 0;
										for($i = 0; $i <= max(array_keys($_SESSION['cart'])); $i++) {
											if($_SESSION['cart'][$i][0] != "") {
												if($_SESSION['cart'][$i][0] == $_GET['id']) {
													$c++;	
												}
											}
										}										
									}
									if($c == 0) {
										echo "<a href='?u=atc&id={$_GET[id]}'>Add to cart</a>";
									}else{
										echo "Product already added to cart";	
									}
					}else{
						echo "For purchase!! Please login";
					}
				?>
            </td>
          </tr>
          <tr>
            <td colspan="2">
            <h2>Product Details</h2>
            <img src="images/<?php echo $product->Picture; ?>" width="220" height="100" />
           	</td>
          </tr>
          <tr>
            <td id="borderRight" width="107"><b>Name: </b></td>
            <td width="477"><?php echo $product->Name; ?></td>
          </tr>
          <tr>
            <td id="borderRight" ><b>Category: </b></td>
            <td>
				<?php 
					$subCategory->Id = $product->SubcategoryId;
					$subCategory->SelectById();
					$category->Id = $subCategory->CategoryId;
					$category->SelectById();
					echo $category->Name;
				?>
            </td>
          </tr>
          <tr>
            <td id="borderRight"><b>Sub-Category: </b></td>
            <td><?php echo $subCategory->Name; ?></td>
          </tr>
          <tr>
            <td id="borderRight"><b>Description: </b></td>
            <td><?php FileRead("files/" . $product->Description); ?></td>
          </tr>
          <tr>
            <td id="borderRight"><b>Price: </b></td>
            <td><?php echo $product->Price; ?></td>
          </tr>
          <tr>
            <td id="borderRight"><b>Stock: </b></td>
            <td>
			<?php 
				$unit->Id = $product->UnitId;
				$unit->SelectById();
				echo $product->Stock . " " .$unit->Name; 
			?>
            </td>
          </tr>
          <tr>
            <td id="borderRight"><b>Vat: </b></td>
            <td><?php echo $product->Vat; ?></td>
          </tr>
          <tr>
            <td id="borderRight"><b>Discount: </b></td>
            <td><?php echo $product->Discount; ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
            	<textarea name="comment" cols="40" rows="4">
                </textarea><br>
                <input id="btn" type="submit" name="sub" value="COMMENT">
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      </table>

</div>