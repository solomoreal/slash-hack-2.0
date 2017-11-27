<?php
include_once 'Model.php';

/**
* 
*/
class Testimony extends Model
{
	protected $testimony_id;
	public $phone;
	public $email;
	public $first_name;
	public $last_name;
	public $testimony;
	public $date;


	public static $class_name = 'Testimony';
	public static $table_name  = 'testimony';
	public static $primary_key = 'testimony_id'; 
	public static $table_fields = array ('testimony_id','phone','email','first_name','last_name','testimony','date');






	function __construct()
	{
		# code...
		parent::__construct();

	}

	public function getTestimonyid(){
		return $this->test_id;
	}

	// public function setTestimonyid(){

	// 	if($lasttestimony = static::last()){
	// 		$lastId = explode ('/',$lasttestimony->test_id);
	// 		$lastId[1]++;
	// 		$this->test_id = 'Testimony/00'.$lastId[1];
	// 	}else{
	// 		$this->test_id = 'Testimony/001'; 
	// 	}

	// }

		public function TellTestimony(){
			
	 		// $this->setTestimonyid();	 		
	 		return ($this->create())? true : false;
	 	}


	
}





?>