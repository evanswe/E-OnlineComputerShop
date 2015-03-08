<?php
	class Purchase extends DB{
		public $Id;
		public $UserId;
		public $Delivery;
		public $Date;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into purchase (userid, delivery, date)
								values(
										'".MS($this->UserId)."',
										'".MS($this->Delivery)."',
										'".MS($this->Date)."')";
			if(mysql_query($sql)) {
				$this->Id = mysql_insert_id();
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update purchase 
						set
							userid = '".MS($this->UserId)."',
							delivery = '".MS($this->Delivery)."'
						where
							id = '".MS($this->Id)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from purchase
						where
							id = '".MS($this->Id)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}
		
		public function SelectById() {
			$this->Connect();
			$sql = "select * from purchase where id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->UserId = $d[1];	
				$this->Delivery = $d[2];
			}
		}	
	}

?>