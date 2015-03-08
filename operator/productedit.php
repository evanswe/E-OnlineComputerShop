<div id="main">
	<div id="welcome" class="post">
    <?php
		$c = new Category();
		$sc = new SubCategory();
		$unt = new Unit();
		$p = new Product();
	?>
  
    <script language="JavaScript"><!--
		function setOptions(chosen) {
			var selbox = document.myform.opttwo;
			 //alert("Hi");
			selbox.options.length = 0;
			if (chosen == "0") {
			  selbox.options[selbox.options.length] = new Option('Please select one of the options above first', '0');	 
			}
		<?php
				$r = $c->Select();
				for($i = 0; $i < count($r); $i++) {
		?>
			if (chosen == "<?php echo $r[$i][0]; ?>") {
				<?php
					$sc->CategoryId = $r[$i][0];
					$rr = $sc->Select();
					if($rr != "") {
					for($j = 0; $j < count($rr); $j++) {
						
				?>
					selbox.options[selbox.options.length] = new Option("<?php echo $rr[$j][1]; ?>", "<?php echo $rr[$j][0]; ?>");
			  <?php } } ?>
			}
		<?php } ?>	
				
		}
//--></script>
    	
        
<?php 
	$err = 0;
	$ename = "";
	$edescription = "";
	if(isset($_POST['sub'])){
		if($_POST['name'] == ""){
			$err++;
			$ename = "Please enter name";
		}
		
		if($_POST['des'] == ""){
			$err++;
			$edescription = "Please enter description";
		}
		
		
		
		if($err == 0){
			$p->Id = $_POST['upid'];
			$p->SelectById();
			$des = "files/" . $p->Description;
			unlink($des);
			
			if(($_FILES['pic'] != "") && (($_FILES['pic']['type'] == "image/jpg") ||
									 ($_FILES['pic']['type'] == "image/jpeg") ||
									 ($_FILES['pic']['type'] == "image/png") ||
									 ($_FILES['pic']['type'] == "image/gif"))){
				if($p->Picture != ""){
					$img = "images/".$p->Picture;
					unlink($img);
				}
				$p->Picture = UploadImage($_FILES['pic']);
			}
			
			$p->Name = $_POST['name'];
			$p->Description = CreateFile($_POST['des']);
			$p->Price = $_POST['price'];
			$p->SubcategoryId = $_POST['opttwo'];
			$p->UnitId = $_POST['unitid'];
			$p->Vat = $_POST['vat'];
			$p->Discount = $_POST['discount'];
			$p->Stock = $_POST['stock'];
			
			
			if($p->Update()){
				$msg = "Updated successfully";
				Redirect("?o=product_add&ms={$msg}");
			}else{
				$msg = $p->Err;
			}
		}
	}
	
	$p->Id = $_GET['id'];
	$p->SelectById();
?>        
        
        
        
        
        <h2>Add Product</h2>
      <form action="" method="post"  name="myform" enctype="multipart/form-data">  
      <input type="hidden" name="upid" value="<?php echo $_GET['id']; ?>" />
        <table width="456" border="0">
          <tr>            
            <td width="88"><b>Name: </b></td>
            <td width="218"><input type="text" name="name" value="<?php echo $p->Name; ?>" /></td>
            <td width="136"><?php echo $ename; ?></td>
          </tr>
                <tr>
            <td><b>Description:</b></td>
            <td><textarea name="des"><?php FileRead("files/" . $p->Description); ?></textarea></td>
            <td><?php echo $ename; ?></td>
          </tr>
    
          <tr>
            <td><b>Price:</b></td>
            <td><input type="text" name="price" value="<?php echo $p->Price; ?>" /></td>
          </tr>
          <tr>
              <td><b>Category:</b></td>
              <td>
              
               	<?php
					$p->SelectById();
					$sc->Id = $p->SubcategoryId;
					$sc->SelectById();
				?>

              <select name="optone" size="1"
                             onchange="setOptions(document.myform.optone.options
                             [document.myform.optone.selectedIndex].value);">
              	<option value="0">Select One</option>
                       <?php
                         	$r=$c->Select();
                        	Selected($r, $sc->CategoryId);
                       ?>              
                       
                     </select>
              </td>
          </tr>
          <tr>	
                <td><b>Sub-Category:</b></td>
                <td>
                	<select name="opttwo">
                    	<option value="0">Select a category first</option>
                          <?php 
                         	$r=$sc->Select();
                        	Selected($r, $p->SubcategoryId);
	                     ?>
                    </select>
                </td>    
          </tr> 
          <tr>
              <td><b>Unit:</b></td>
              <td>
                      <select name="unitid">
                        <option value="0" selected="selected">Select Unit</option>
                       <?php
                            Selected($unt->Select(), $p->UnitId);
                       ?>              
                       
                     </select>
              </td>
          </tr> 
          <tr>
            <td><b>Vat:</b></td>
            <td><input type="text" name="vat" value="<?php echo $p->Vat; ?>" /></td>
          </tr>
          <tr>
            <td><b>Discount:</b></td>
            <td><input type="text" name="discount" value="<?php echo $p->Vat; ?>" /></td>
          </tr>
       
  
          <tr>
            <td><b>Stock:</b></td>
            <td><input type="text" name="stock" value="<?php echo $p->Stock; ?>" /></td>
          </tr>
          <tr>
            <td><b>Picture:</b></td>
            <td>
            <input type="file" name="pic" /><br />
            <?php 
			if($p->Picture != ""){
				echo "<img src='images/{$p->Picture}' width='120' height='80'/>";
			}
			?>
            </td>
          </tr>
          
          
          <tr>
            <td></td>
            <td><input type="submit" value="Create" name="sub"></td>
          </tr>
         
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		  
        </table>
		</form>
    
    
    <table width="" border="1">
    	<tr>
        	<th>Name</th>
        	<th>Description</th>
        	<th>price</th>
        	<th>Category</th>
        	<th>Subcategory</th>
        	<th>Unit</th>
        	<th>Vat</th>
        	<th>Stock</th>
        	<th>Discount</th>
            <th>Picture</th>
        	<th>Edit</th>
        	<th>Delete</th>
        </tr>
			<?php 
            	$r = $p->Select();
            	Table($r, "product");
            ?>
    </table>
    </div>
</div>    