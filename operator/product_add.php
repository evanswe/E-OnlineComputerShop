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
	$eprice = "";
	$esubcategory = "";
	$ecategoryid = "";
	$eunitid = "";
	$evat = "";
	$epicture = "";
	$ediscount = "";
	$estock = "";


	if(isset($_POST['sub'])){
		if($_POST['name'] == ""){
			$err++;
			$ename = "Please enter name";
		}
		
		if($_POST['des'] == ""){
			$err++;
			$edescription = "Please enter description";
		}
		if($_POST['price'] == ""){
			$err++;
			$eprice = "Please enter Price";
		}
			if($_POST['opttwo'] == ""){
			$err++;
			$esubcategoryid = "Please enter Subcategory";
		}
		
		if($_POST['unitid'] == ""){
			$err++;
			$eunitid = "Please enter Unit";
		}
		if($_POST['vat'] == ""){
			$err++;
			$evat = "Please enter vat";
		}
		if($_FILES['pic']['name'] == ""){
			$err++;
			$epicture = "Please upload picture";
		}
		if($_POST['discount'] == ""){
			$err++;
			$ediscount = "Please enter discount value";
		}
		if($_POST['stock'] == ""){
			$err++;
			$estock = "Please enter stock value";
		}
		
		if($err == 0){
			$p->Name = $_POST['name'];
			$p->Description = CreateFile($_POST['des']);
			$p->Price = $_POST['price'];
			$p->SubcategoryId = $_POST['opttwo'];
			$p->UnitId = $_POST['unitid'];
			$p->Vat = $_POST['vat'];
			$p->Picture = UploadImage($_FILES['pic']);
			$p->Discount = $_POST['discount'];
			$p->Stock = $_POST['stock'];
			
			
			if($p->Insert()){
				echo "Inserted";
			}else{
				echo $p->Err;
			}
		}
	}
?>        
        
        
        
        
        <h2>Add Product</h2>
      <form action="" method="post"  name="myform" enctype="multipart/form-data">  
        <table width="456" border="0">
          <tr>            
            <td width="88"><b>Name: </b></td>
            <td width="218"><input type="text" name="name" /></td>
            <td width="136"><?php mer($ename); ?></td>
          </tr>
                <tr>
            <td><b>Description:</b></td>
            <td><textarea name="des"></textarea></td>
            <td><?php mer($edescription); ?></td>
          </tr>
    
          <tr>
            <td><b>Price:</b></td>
            <td><input type="text" name="price" /></td>
            <td><?php mer($eprice); ?></td>
          </tr>
          <tr>
              <td><b>Category:</b></td>
              <td>
              <select name="optone" size="1"
                             onchange="setOptions(document.myform.optone.options
                             [document.myform.optone.selectedIndex].value);">
              	<option value="0">Select One</option>
                       <?php
                            Option($c->Select());
                       ?>              
                       
                     </select>
              </td>
              <td><?php mer($ecategory); ?></td>
          </tr>
          <tr>	
                <td><b>Sub-Category:</b></td>
                <td>
                	<select name="opttwo">
                    	<option value="0">Select a category first</option>
                    </select>
                </td>   
                <td><?php mer($esubcategory); ?></td> 
          </tr> 
          <tr>
              <td><b>Unit:</b></td>
              <td>
                      <select name="unitid">
                        <option value="0" selected="selected">Select Unit</option>
                       <?php
                            Option($unt->Select());
                       ?>              
                       
                     </select>
              </td>
              <td><?php mer($eunitid); ?></td>
          </tr> 
          <tr>
            <td><b>Vat:</b></td>
            <td><input type="text" name="vat" /></td>
            <td><?php mer($evat); ?></td>
          </tr>
          <tr>
            <td><b>Discount:</b></td>
            <td><input type="text" name="discount"></td>
            <td><?php mer($ediscount); ?></td>
          </tr>
       
  
          <tr>
            <td><b>Stock:</b></td>
            <td><input type="text" name="stock" /></td>
          <td><?php mer($estock); ?></td>
          </tr>
          
          <tr>
            <td><b>Picture:</b></td>
            <td>
            <input type="file" name="pic" />
            </td>
            <td><?php mer($epicture); ?></td>
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