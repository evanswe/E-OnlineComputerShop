<?php
	class Subcategory extends DB{
		public $Id;
		public $Name;
		public $CategoryId;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into subcategory (name, categoryid)
								values
										('".MS($this->Name)."',
										'".MS($this->CategoryId)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update subcategory
						set
							name = '".MS($this->Name)."',
							categoryid = '".MS($this->CategoryId)."'
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
			$sql = "delete from subcategory
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
			$sql = "select * from subcategory where	id = '".MS($this->Id)."'";//echo $sql;
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Name = $d[1];	
				$this->CategoryId = $d[2];
			}
		}
			
		public function Select()
		   {
			$this->Connect();
			$a = "";
			$sql = "select subcategory.id, subcategory.name, category.name 
						from subcategory, category
						where subcategory.categoryid = category.id";
			if($this->Name != "") {
				$sql .= " AND subcategory.name LIKE '%".MS($this->Name)."%'";	
			}
			if($this->CategoryId > 0) {
				$sql .= " AND subcategory.categoryid = '".MS($this->CategoryId)."'";	
			}
			$sql .= " ORDER BY subcategory.name ASC";	
			//echo $sql;
			
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}	
	}

?>