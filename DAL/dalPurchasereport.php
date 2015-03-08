<?php
	class Purchasereport extends DB{
		public $ProductId;
		public $PurchaseId;
		public $Quantity;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into purchasereport(productid, purchaseid, quantity)
								values(
									   '".MS($this->ProductId)."',
										'".MS($this->PurchaseId)."',
										'".MS($this->Quantity)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update purchasereport 
						set
							purchaseid = '".MS($this->PurchaseId)."',
							delivery = '".MS($this->Quantity)."'
						where
							productid = '".MS($this->ProductId)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from purchasereport
						where
							productid = '".MS($this->ProductId)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}
		
		public function SelectById() {
			$this->Connect();
			$sql = "select * from purchasereport where	productid = '".MS($this->ProductId)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->PurchaseId = $d[1];	
				$this->Quantity = $d[2];
			}
		}	
	}

?>