<?php
	class Card extends DB{
		public $Sl;
		public $Pin;
		public $Amount;
		public $Status;
	
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into card (sl, pin, amount, status)
								values ('".MS($this->Sl)."',
										'".MS($this->Pin)."',
										'".MS($this->Amount)."',
										'".MS($this->Status)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update card
						set							
							status = '".MS($this->Status)."'							
						where
							sl = '".MS($this->Sl)."' AND 
							pin = '".MS($this->Pin)."'";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from card
						where
						      sl = '".MS($this->Sl)."'";
			if(mysql_query($sql)) {
				return true;			
			}
			$this->Err = mysql_error();
			return false;			
		}
		
		public function SelectById() {
			$this->Connect();
			$sql = "select * from card where	sl = '".MS($this->Sl)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Pin = $d[1];
				$this->Amount = $d[2];
				$this->Status = $d[3];
			
			}
		}
		
		public function SelectByCard() {
			$this->Connect();
			$sql = "select * from card 
					where 
						sl = '".MS($this->Sl)."' AND 
						pin = '".MS($this->Pin)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {				
				$this->Amount = $d[2];
				$this->Status = $d[3];
			
			}
		}
	}

?>