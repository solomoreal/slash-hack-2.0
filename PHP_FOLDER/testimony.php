<?php
include_once './include/Model.php';

/**
* 
*/
class Testimony extends Model
{
	protected $test_id;
	public $first_name;
	public $last_name;
	public $email;
	public $phone;
	public $testimony;
	public $error = array ();


	public static $class_name = 'Testimony';
	public static $table_name  = 'share_testimony';
	public static $primary_key = 'test_id'; 
	public static $table_fields = array ('first_name','last_name','email','phone','test_id','testimony');






	function __construct()
	{
		# code...
		parent::__construct();

	}

	public function getTestimonyid(){
		return $this->test_id;
	}

	public function setTestimonyid(){

		if($lasttestimony = static::last()){
			$lastId = explode ('/',$lasttestimony->test_id);
			$lastId[1]++;
			$this->test_id = 'Testimony/00'.$lastId[1];
		}else{
			$this->test_id = 'Testimony/001'; 
		}

	}

		public function TellTestimony(){
			
	 		$this->setTestimonyid();	 		
	 		return ($this->create())? true : false;
	 	}


	
}





?>