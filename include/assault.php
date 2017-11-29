<?php 

include_once 'Model.php';

/**
* 
*/
class AssaultReport extends Model
{
	public $reporter_first_name;
	public $reporter_last_name;
	protected $report_id;
	public $reporter_email;
	public $survivor_first_name;
	public $survivor_last_name;
	public $survivor_gender;
	public $num_offenders;
	public $name_offenders;
	public $gender_offenders;
	public $relationship;
	public $date_of_assault;
	public $time_of_assault;
	public $location_assault;
	public $assault_type;
	public $influence;
	public $assault_desc;


	public static $class_name = 'AssaultReport';
	public static $table_name  = 'assault_report';
	public static $primary_key = 'report_id'; 
	public static $table_fields = array ('reporter_first_name','reporter_last_name','report_id','reporter_email','survivor_first_name','survivor_last_name','survivor_gender','num_offenders','name_offenders','gender_offenders','relationship','date_of_assault','time_of_assault','location_assault','assault_type','influence','assault_desc');






	function __construct()
	{
		parent::__construct();

	}

	public function getReport_id(){
		return $this->report_id;
	}



	public function insertNewReport(){			 		
	 	return ($this->create())? true : false;
	}

	
	
}



?>