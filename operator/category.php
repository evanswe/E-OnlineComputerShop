<div class="main_content">

<br>
<br>
<?php
$cat = new Category();

$err = 0;

$ecategory = "";
$msg = "";
if(isset($_POST['sub'])){
	$category = $_POST['category'];
	
	if(strlen($category)<3){
		$err++;
		$ecategory = "At least  3 character";
	}
	if($err == 0){
		$cat->Name = $category;
		if($cat->Insert()){
		$msg = "Category Inserted";
		$cat->Name = "";
		}else{
			$msg = $cat->Err;
		}
	}
		
}

//echo $cat->Name;
?>
<div id="search" style="float:right">
<form action="" method="post">
	<input type="text" name="src" placeholder="Search Here" />
    <input type="submit" name="search" value="Search" />
</form>
</div>



<form action ="" method="post"/>
<table width="400">
<tr>
        <td colspan="3">
        	<?php 
				if($msg != ""){
					msc($msg);
				}
			?>
        </td>
    </tr>
  <tr>
    <td colspan="3"><h3>ADD Category</h3></td>
  </tr>
  <tr>
    <td width="120">Category Name</td>
    <td width="120"><input type="text" name="category"/></td>
    <td width="122"><?php mer($ecategory); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Add"/></td>
    
  </tr>
</table>
</form>


<br />
<br />
<table border="1" width="455">
	<tr>
    	<th width="140">Name</th>
    	<th width="50">Edit</th>
    	<th width="50">Delete</th>
    </tr>
    
    <?php 
		if(isset($_POST['search'])){
			$cat->Name = $_POST['src'];
		}
		
		Table($cat->Select(), "category");
	?>
</table>


</div>
