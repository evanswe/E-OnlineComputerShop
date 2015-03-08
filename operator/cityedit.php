<div class="main_content">



<?php 
$ct = new City();
$cnt = new Country();



$err = 0;
if(isset($_POST['sub'])){
	
	if($err == 0){
		$ct->Id = $_POST['id'];
		$ct->Name = $_POST['city'];
		$ct->CountryId = $_POST['country'];
		echo "<br />";
		if($ct->Update()){
			Redirect("?o=city&ms=Updated Successfully");
		}else{
			Redirect("?o=city&ms={$ct->Err}");
		}
	}
}



$ct->Id = $_GET['id'];
$ct->SelectById();
//echo $ct->CountryId;
?>



<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
    <table width="533">
      <tr>
        <td colspan="3">
        </td>
      </tr>
      <tr>
        <td colspan="3"><h3>ADD City</h3></td>
      </tr>
      <tr>
        <td width="94">City Name</td>
        <td width="152"><input type="text" name="city" value="<?php echo $ct->Name; ?>" /></td>
        <td width="271"></td>
      </tr>
      <tr>
        <td width="94">Country Name</td>
        <td width="152">
        	<select name="country">
            	<option value="">Select Country</option>
                <?php 
					Selected($cnt->Select(), $ct->CountryId);
				?>
            </select>
        </td>
        <td width="271"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="sub" value="UPDATE" /></td>
        <td>&nbsp;</td>
      </tr>
    </table>
</form>
</div>