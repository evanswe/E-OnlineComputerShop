<div class="main_content">
<br />
<br />

<?php 
$cnt = new Country();


$err = 0;

$ecountry = "";

$msg = "";

if(isset($_POST['sub'])){
	$country = $_POST['country'];
	
	if(strlen($country)<3){
		$err++;
		$ecountry = "At least 3 characters";
	}
	
	if($err == 0){
		$cnt->Name = $country;
		if($cnt->Insert()){
		$msg = "Country Inserted";
		}else{
			$msg = $cnt->Err;
		}
	}
}


?>

<div id="search" style="float:right">
<form action="" method="post">
	<input type="text" name="src" placeholder="Search Here" />
    <input type="submit" name="search" value="Search" />
</form>
</div>

<form action="" method="post">
    <table width="400">
      <tr>
        <td colspan="3">
        	<?php
				if(($err == 0) && ($msg == "")){
					msc($_GET['ms']);
				}else if($err == 0){
					msc($msg);
				}
			?>
        </td>
      </tr>
      <tr>
        <td colspan="3"><h3>ADD Country</h3></td>
      </tr>
      <tr>
        <td width="99">Country Name</td>
        <td width="130"><input type="text" name="country" /></td>
        <td width="155"><?php mer($ecountry); ?></td>
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
<table border="1" width="400">
	<tr>
    	<th>Name</th>
    	<th>Edit</th>
    	<th>Delete</th>
    </tr>
    
    <?php 
		if(isset($_POST['search'])){
			$cnt->Name = $_POST['src'];
		}
		Table($cnt->Select(), "country");
	?>
</table>
</div>
