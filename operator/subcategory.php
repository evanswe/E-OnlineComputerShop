<div class="main_content">
<?php
$subcat = new SubCategory();
	$cat = new Category();
	
	$esubcategory = "";
	$ecategory = "";
	$err = 0;
	
	$msg = "";
	
	if(isset($_POST['sub'])){
		$subcategory = $_POST['subcategory'];
		$category = $_POST['category'];
		
		if(strlen($subcategory)<3){
			$err++;
			$esubcategory = "Must be greater than three";
		}
		
		if($category == ""){
			$err++;
			$ecategory = "Please select category";
		}
		
		if($err == 0){
			$subcat->Name = $subcategory;
			$subcat->CategoryId = $category;
			if($subcat->Insert()){
				$msg = "Successfully inserted";			
			}else{
				$msg = "Failure";
			}
		}
	}

?>


  <form action="" method="post">
    <table width="533">
      <tr>
        <td colspan="3">
        	<?php 
				if($err == 0){
					msc($msg);
				}
			?>
        </td>
      </tr>
      <tr>
        <td colspan="3"><h3>Add SubCategory</h3></td>
      </tr>
      <tr>
        <td width="188">Subcategory Name</td>
        <td width="152"><input type="text" name="subcategory" /></td>
        <td width="271"><?php mer($esubcategory); ?></td>
      </tr>
  <tr>
    <td width="155">Category Name</td>
    <td>
    <select name="category">
            	<option value="">Select Category</option>
                <?php 
					Option($cat->Select());
				?>
            </select>
    </td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add Subcategory" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>

<br />
<br />


<table align="center" border="1" bgcolor="White">
	<tr>
    	<th>SubcategoryName</th>
    	<th>Category Name</th>
    	<th>Edit</th>
    	<th>Delete</th>
    </tr>
    
    <?php 
		Table($subcat->Select(), "subcategory");
	?>
</table>


</div>
