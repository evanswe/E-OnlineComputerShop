<?php
	class City extends DB{
		public $Id;
		public $Name;
		public $CountryId;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into city (name, countryid)
								values
										('".MS($this->Name)."',
										'".MS($this->CountryId)."')";
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update city 
						set
							name = '".MS($this->Name)."',
							countryid = '".MS($this->CountryId)."'
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
			$sql = "delete from city
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
			$sql = "select * from city where	id = '".MS($this->Id)."'";
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Name = $d[1];	
				$this->CountryId = $d[2];
			}
		}	
		public function Select()
		{
			$this->Connect();
			$a = "";
			$sql = "select city.id, city.name, country.name 
						from city, country
						where city.countryid = country.id";
			if($this->Name != "") {
				$sql .= " AND city.name LIKE '%".MS($this->Name)."%'";	
			}
			if($this->CountryId > 0) {
				$sql .= " AND city.countryid = '".MS($this->CountryId)."'";	
			}
			$sql .= " ORDER BY city.name ASC";	
			//echo $sql;
			
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}
	}

?>