<?php
	class Comment extends DB{
		public $ProductId;
		public $UserId;
		public $Description;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into comment (productid, userid, description)
								values(
										'".MS($this->ProductId)."',
										'".MS($this->UserId)."',
										'".MS($this->Description)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update comment
						set
							userid = '".MS($this->UserId)."'
							description = '".MS($this->Description)."'
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
			$sql = "delete from comment
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
			$sql = "select * from comment where	productid = '".MS($this->ProductId)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->UserId = $d[1];	
				$this->Description = $d[2];
			}
		}	
		
		public function Select()
		{
			$this->Connect();
			$a = "";
			$sql = "select p.id, u.fullname, c.description 
						from comment as c, 
							 product as p,
							 user as u
						where c.userid = u.id AND
							  c.productid = p.id";
			
			if($this->ProductId > 0) {
				$sql .= " AND p.id = '".MS($this->ProductId)."'";	
			}
			//echo $sql;
			
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}
	}

?>