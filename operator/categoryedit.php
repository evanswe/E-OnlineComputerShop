<div class="main_content">
<?php 
	$cat = new Category();
	
	$err = 0;
	if(isset($_POST['sub'])){
		
		if($err == 0){
			$cat->Id = $_POST['id'];
			$cat->Name = $_POST['name'];
			if($cat->Update()){
				Redirect("?o=category&ms=Updated Successfully");
			}else{
				echo $cat->Err;
			}
		}
		
	}
	
	
	
	
	$cat->Id = $_GET['id'];
	$cat->SelectById();
?>


<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	<table align="center">
    	<tr>
        	<td colspan="3"><h2>Edit Category</h2></td>
        </tr>
    	<tr>
        	<td><b>Category Name: </b></td>
        	<td><input type="text" name="name" value="<?php echo $cat->Name; ?>" /></td>
        	<td></td>
        </tr>
    	<tr>
        	<td></td>
        	<td><input type="submit" name="sub" value="Update" /></td>
        	<td></td>
        </tr>
    </table>
</form>
</div>