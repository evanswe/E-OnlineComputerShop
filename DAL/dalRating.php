<?php
	class Rating extends DB{
		public $ProductId;
		public $UserId;
		public $Rate;
		public $Number;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into rating (productid, userid, rate)
								values('".MS($this->ProductId)."',
										'".MS($this->UserId)."',
										'".MS($this->Rate)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update rating 
						set
							userid = '".MS($this->UserId)."',
							rate = '".MS($this->Rate)."'
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
			$sql = "delete from rating
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
			$sql = "select * from rating where	productid = '".MS($this->ProductId)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->UserId = $d[1];	
				$this->Rate = $d[2];
			}
		}
		public function RatingCal()
		{
			$this->Connect();
			$sql = "select count(userid), avg(rate) from rating 
						where	productid = '".MS($this->ProductId)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Number = $d[0];	
				$this->Rate = $d[1];
			}			
		}
	}

?>