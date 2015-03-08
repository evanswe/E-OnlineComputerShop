<div class="main_content">

<br />
<br />
<?php 
	$ct = new City();
	$cnt = new Country();
	
	
	$ecity = "";
	$ecountry = "";
	$err = 0;
	$msg = "";
	
	if(isset($_POST['sub'])){
		$city = $_POST['city'];
		$country = $_POST['country'];
		
		if(strlen($city)<3){
			$err++;
			$ecity = "Must be greater than three";
		}
		
		if($country == ""){
			$err++;
			$ecountry = "Please select country";
		}
		
		if($err == 0){
			$ct->Name = $city;
			$ct->CountryId = $country;
			if($ct->Insert()){
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
				if(($err == 0) && ($msg != "")){
					msc($msg);
				}else{
					msc($_GET['ms']);
				}
			?>
        </td>
      </tr>
      <tr>
        <td colspan="3"><h3>ADD City</h3></td>
      </tr>
      <tr>
        <td width="94">City Name</td>
        <td width="152"><input type="text" name="city" /></td>
        <td width="271"><?php mer($ecity); ?></td>
      </tr>
      <tr>
        <td width="94">Country Name</td>
        <td width="152">
        	<select name="country">
            	<option value="">Select Country</option>
                <?php 
					Option($cnt->Select());
				?>
            </select>
        </td>
        <td width="271"><?php mer($ecountry); ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="sub" value="ADD" /></td>
        <td>&nbsp;</td>
      </tr>
    </table>
</form>

<br />
<br />


<table align="center" border="1">
	<tr>
    	<th>City Name</th>
    	<th>Country Name</th>
    	<th>Edit</th>
    	<th>Delete</th>
    </tr>
    
    <?php 
		Table($ct->Select(), "city");
	?>
</table>
</div>
