<?php 
class Delivery extends DB{
	public $Id;
	public $Purchaseid;
	public $Status;
	
	
	public function Insert(){
		$this->Connect();
		$sql = "insert into delevary(purchase_id, status)
								values(	 '".MS($this->Purchaseid)."',
										 '".MS($this->Status)."')";
			if(mysql_query($sql)){
				return true;
			}
			$this->Err = mysql_error();
			return false;			
	}
	
	
	public function Update(){
		$this->Connect();
		$sql = "update delevary
						set
						name = '".MS($this->Purchaseid)."',
						email = '".MS($this->Status)."'
						where 
						id = '".MS($this->Id)."'";
			if(mysql_query($sql)){
				return true;
			}
			$this->Err = mysql_error();
			return false;
	}
	
	
	public function Delete(){
		$this->Connect();
		$sql = "delete from delevary where id = '".MS($this->Id)."'";
		if(mysql_query($sql)){
			return true;
		}
		$this->Err = mysql_error();
		return false;
	}
	
	
	
	public function SelectById(){
		$this->Connect();
		$sql = "select * from delevary where id = '".MS($this->Id)."'";
		$sql = mysql_query($sql);
		while($r = mysql_fetch_row($sql)){
			$this->Purchaseid = $r[1];
			$this->Status = $r[2];
		}
	}
	
	
	
}
?>