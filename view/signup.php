<div class="main_content">
  <?php
  $cnt = new Country();
  $ct = new City();
  $u = new User();
  
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
				$r = $cnt->Select();
				for($i = 0; $i < count($r); $i++) {
		?>
			if (chosen == "<?php echo $r[$i][0]; ?>") {
				<?php
					$ct->CountryId = $r[$i][0];
					$rr = $ct->Select();
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
		$epassword = "";
		
		if(isset($_POST['sub'])){
			
			if(strlen($_POST['pass'])<6){
				$err++;
				$epassword = "Password must be at <br />least 6 characters";
			}
			
			if($_POST['pass'] != $_POST['pass1']){
				$err++;
				$epassword = "Password does not match";
			}
			
			if($err == 0){
				$u->FullName = $_POST['fname'];
				$u->Email = $_POST['email'];
				$u->Password = $_POST['pass'];
				$u->UserType = "u";
				$u->Balance = "0";
				$u->CityId = $_POST['opttwo'];
				$u->Gender = $_POST['gen'];
				$u->Contact = $_POST['contact'];
				
				if($u->Insert()){
					$u->Email = $_POST['email'];
					$u->SelectByEmail();
					$_SESSION['id'] = $u->Id;
					Redirect("?u=welcome");
				}
				
				
		}
	}
			
?>        
        
    	
      
		
<br />
<br />

<br />
<form action="" method="post" enctype="multipart/form-data" name="myform">
  <table width="456" height="301" border="0" align="center">
  <tr>
    <td width="76"><b>Full Name</b></td>
    <td width="161"><input type="text" name="fname" /></td>
  </tr>
  <tr>
  <tr>
    <td><b>Email</b></td>
    <td><input type="text" name="email" /></td>
  </tr>
    <td><b>Password</b></td>
    <td><input type="password" name="pass" /></td>
    <td><?php mer($epassword); ?></td>
  </tr>
  </tr>
    <td><b>Retype-Password</b></td>
    <td><input type="password" name="pass1" /></td>
  </tr>
  <tr>
  <tr>
    <td><b>Address</b></td>
    <td><textarea name="addr"></textarea></td>
  </tr>
  <tr>
              <td><b>Country:</b></td>
               <td>
              <select name="optone" size="1"
                             onchange="setOptions(document.myform.optone.options
                             [document.myform.optone.selectedIndex].value);">
              	<option value="0">Select One</option>
                       <?php
                            Option($cnt->Select());
                       ?>              
                       
                     </select>
              </td>
               <td width="205"></td>
                </tr>
          
          <tr>	
                <td><b>City:</b></td>
                    <td>
                	<select name="opttwo">
                    	<option value="0">Select a city first</option>
                    </select>
                </td>   
                <td></td>    
          </tr> 
    <td><b>Gender</b></td>
    <td><input type="radio" name="gen" value="m" />Male<input type="radio" name="gen" value="f" />Female</td>
  </tr>
  <tr>
    <td><b>Contact</b></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" value="Submit" /></td>
  </tr>
</table>





</div>

