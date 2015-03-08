<?php
	class User extends DB{
		public $Id;
		public $FullName;
		public $Email;
		public $Password;
		public $UserType;
		public $Balance;
		public $Address;
		public $CityId;
		public $Gender;
		public $Contact;
		public $Status;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into user (fullname, email, password, usertype, address, cityid, gender, contact, status)
								values(
										'".MS($this->FullName)."',
										'".MS($this->Email)."',
										'".MS($this->Password)."',
										'".MS($this->UserType)."',
										'".MS($this->Address)."',
										'".MS($this->CityId)."',
										'".MS($this->Gender)."',
										'".MS($this->Contact)."',
										'".MS($this->Status)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update user
						set
							fullname = '".MS($this->FullName)."',							
							password = '".MS($this->Password)."',
							usertype = '".MS($this->UserType)."',
							balance = '".MS($this->Balance)."',
							address = '".MS($this->Address)."',
							cityid = '".MS($this->CityId)."',
							gender = '".MS($this->Gender)."',
							contact = '".MS($this->Contact)."',
							status = '".MS($this->Status)."'
						where
							id = '".MS($this->Id)."'";
			//echo $sql;				
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from user
						where
						      id = '".MS($this->Id)."'";
			if(mysql_query($sql)) {
				return true;			
			}
			$this->Err = mysql_error();
			return false;			
		}
		
		public function Login()
		{
			$this->Connect();
			$sql = "select * from user 
								where
									email = '".MS($this->Email)."' AND
									password = '".MS($this->Password)."'"; //echo $sql;
			$sql = mysql_query($sql);
			if(mysql_num_rows($sql) > 0) {
				while($d = mysql_fetch_row($sql)) {
					$this->Id = $d[0];
				}				
				return true;
			}	
			return false;						
		}
		
		
		
		
		
		
		
		public function SelectById() {
			$this->Connect();
			$sql = "select * from user where id = '".MS($this->Id)."'"; //echo $sql . "<br />";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->FullName = $d[1];
				$this->Email = $d[2];
				$this->Password = $d[3];
				$this->UserType = $d[4];
				$this->Balance = $d[5];
				$this->Address = $d[6];
				$this->CityId = $d[7];
				$this->Gender = $d[8];	
				$this->Contact = $d[9];
				$this->Status = $d[10];	
			}
		}	
		
		
		public function SelectByEmail() {
			$this->Connect();
			$sql = "select * from user where email = '".MS($this->Email)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Id = $d[0];
				$this->FullName = $d[1];
				$this->Email = $d[2];
				$this->Password = $d[3];
				$this->UserType = $d[4];
				$this->Balance = $d[5];
				$this->Address = $d[6];
				$this->CityId = $d[7];
				$this->Gender = $d[8];	
				$this->Contact = $d[9];
				$this->Status = $d[10];	
			}
		}	
		
		
	
		public function Select()
		{
			$this->Connect();
			$a = "";
			$sql = "select id, fullname, email, address, gender, balance, contact from user";
			if($this->UserType != ""){
			$sql .= " where usertype='".$this->UserType."'";
			}
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}
		
		
		
	}

?>