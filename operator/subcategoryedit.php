<div class="main_content">
<?php 
$subcat = new Subcategory();
$cat = new Category();




$err = 0;
if(isset($_POST['sub'])){
	
	if($err == 0){
		$subcat->Id = $_POST['id'];
		$subcat->Name = $_POST['subacategory'];
		$subcat->CategoryId = $_POST['category'];
		echo "<br />";
		if($subcat->Update()){
			Redirect("?o=subcategory&ms=Updated Successfully");
		}else{
			Redirect("?o=subcategory&ms={$subcat->Err}");
		}
	}
}



$subcat->Id = $_GET['id'];
$subcat->SelectById();

?>

<form action="" method="post">
<table width="453" align="center">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
  <tr>
        <td colspan="3">
        </td>
      </tr>
  <tr>
    <td><b>Subcategory Edit</b></td>
  </tr>
  <tr>
    <td>Subcategory Name</td>
    <td width="163"><input type="text" name="subacategory" value="<?php echo $subcat->Name; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Category Name</td>
   <td width="163">
        	<select name="category">
            	<option value="">Select Category</option>
                <?php 
					Selected($cat->Select(), $subcat->CategoryId);
				?>
            </select>
        </td>
        <td width="132"></td>
      </tr>
       <tr>
        <td height="66">&nbsp;</td>
        <td><input type="submit" name="sub" value="UPDATE" /></td>
        <td>&nbsp;</td>
      </tr>
</table>
</form>

</div>