<?php
	class Product extends DB{
		public $Id;
		public $Name;
		public $Description;
		public $Price;
		public $SubcategoryId;
		public $UnitId;
		public $Vat;
		public $Picture;
		public $Discount;
		public $Stock;
		
		
		public $Frm;
		public $Too;
		
		public function Insert() {
			$this->Connect();
			$sql = "insert into product (name, description, price, subcategoryid, unitid, vat, picture, discount, stock)
								values(
										'".MS($this->Name)."',
										'".MS($this->Description)."',
										'".MS($this->Price)."',
										'".MS($this->SubcategoryId)."',
										'".MS($this->UnitId)."',
										'".MS($this->Vat)."',
										'".MS($this->Picture)."',
										'".MS($this->Discount)."',
										'".MS($this->Stock)."')"; //echo $sql;
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Update() {
			$this->Connect();
			$sql = "update product
						set
							name = '".MS($this->Name)."',
							description = '".MS($this->Description)."',
							price = '".MS($this->Price)."',
							subcategoryid = '".MS($this->SubcategoryId)."',
							unitid = '".MS($this->UnitId)."',
							vat = '".MS($this->Vat)."',
							picture = '".MS($this->Picture)."',
							discount = '".MS($this->Discount)."',
							stock = '".MS($this->Stock)."'
						where
							id = '".MS($this->Id)."'";
			echo $sql;				
			if(mysql_query($sql)) {
				return true;				
			}
			$this->Err = mysql_error();
			return false;			
		}		
		
		public function Delete() {
			$this->Connect();
			$sql = "delete from product
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
			$sql = "select * from product where	id = '".MS($this->Id)."'"; echo $sql;
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$this->Name = $d[1];
				$this->Description = $d[2];
				$this->Price = $d[3];
				$this->SubcategoryId = $d[4];
				$this->UnitId = $d[5];
				$this->Vat = $d[6];
				$this->Picture = $d[7];
				$this->Discount = $d[8];	
				$this->Stock = $d[9];
			}
		}
		
		
		public function Select()
		{
			$this->Connect();
			$a = "";
			$sql = "select p.id, p.name, p.description, p.price, c.name as CategoryName, sc.name as SubcategoryName, u.name as UnitName, p.vat, 		                     		p.stock, p.discount, p.picture 
					from product as p, subcategory as sc, category as c, unit as u 
						where p.subcategoryid = sc.id
							  and
							  sc.categoryid = c.id 
							  and 
							  p.unitid = u.id";
							  
			if($this->SubcategoryId > 0){
				$sql .= " and p.subcategoryid = '".MS($this->SubcategoryId)."'";
			}
			$sql .= " ORDER BY p.id DESC";	
			//echo $sql;
			
			$sql = mysql_query($sql);
			while($d = mysql_fetch_row($sql)) {
				$a[] = $d;	
			}
			return $a;
		}
		
	}

?>