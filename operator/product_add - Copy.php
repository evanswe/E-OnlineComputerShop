<div id="main">
	<div id="welcome" class="post">
    <?php
		$c = new Category();
		$sc = new SubCategory();
		$unt = new Unit();
		$p = new Product();
		if(isset($_POST['sub']))
		{
			$err = 0;
			
			if($_POST['opttwo'] == 0) {
				$err++;	
				$msg .= $err . ". Please Select Sub Category<br>";	
			}
				
			if($err == 0) {
				$p->Name = $_POST['name'];
				$p->Description = CreateFile($_POST['des']);
				$p->Price = $_POST['price'];
				$p->SubcategoryId = $_POST['opttwo'];
				$p->UnitId = $_POST['unitid'];
				$p->Vat = $_POST['vat'];
				$p->Picture = UploadPicture($_FILES['pic']);
				$p->Discount = $_POST['discount'];
				$p->Stock = $_POST['stock'];
				if($p->Insert()) {
					$msg .= "Insert Successful";	
				}else{
					$msg .= $p->Err;
				}
			}
			Redirect("?o=product&msg={$msg}");
		}
	?>
  
    <script language="JavaScript"><!--
function setOptions(chosen) {
	var selbox = document.myform.opttwo;
	 alert("Hi");
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
    	<h2>Add Product</h2>
      <form action="" method="post"  name="myform" enctype="multipart/form-data">  
        <table width="400" border="0" bgcolor="#00CCFF">
          <tr>            
            <td width="117"><b>Name: </b></td>
            <td width="273"><input type="text" name="name" /></td>
          </tr>
                <tr>
            <td><b>Description:</b></td>
            <td><textarea name="des"></textarea></td>
          </tr>
    
          <tr>
            <td><b>Price:</b></td>
            <td><input type="text" name="price" /></td>
          </tr>
          <tr>
              <td><b>Category:</b></td>
              <td>
                      <select name="optone" size="1"
                             onchange="setOptions(document.myform.optone.options
                             [document.myform.optone.selectedIndex].value);">
                        <option value="0" selected="selected">Select Category</option>
                       <?php
                            Option($c->Select());
                       ?>              
                       
                     </select>
              </td>
          </tr>
          <tr>	
                <td><b>Sub-Category:</b></td>
                <td>
                    <select name="opttwo" size="1">
                        <option value="0" selected="selected">Please select one of the options above first</option>
                    </select>
                </td>    
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
          </tr> 
          <tr>
            <td><b>Vat:</b></td>
            <td><input type="text" name="vat" /></td>
          </tr>
          <tr>
            <td><b>Discount:</b></td>
            <td><input type="text" name="discount"></td>
          </tr>
       
  
          <tr>
            <td><b>Stock:</b></td>
            <td><input type="text" name="stock" /></td>
          </tr>
          <tr>
            <td><b>Picture:</b></td>
            <td>
            <input type="file" name="pic" />
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
    
    </div>
</div>    