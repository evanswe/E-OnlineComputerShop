<div class="main_content">
<?php 
	$cnt = new Country();
	
	$err = 0;
	if(isset($_POST['sub'])){
		
		if($err == 0){
			$cnt->Id = $_POST['id'];
			$cnt->Name = $_POST['name'];
			if($cnt->Update()){
				Redirect("?o=country&ms=Updated Successfully");
			}else{
				echo $cnt->Err;
			}
		}
		
	}
	
	
	
	
	$cnt->Id = $_GET['id'];
	$cnt->SelectById();
?>


<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
	<table align="center">
    	<tr>
        	<td colspan="3"><h2>Edit Country</h2></td>
        </tr>
    	<tr>
        	<td><b>Country Name: </b></td>
        	<td><input type="text" name="name" value="<?php echo $cnt->Name; ?>" /></td>
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