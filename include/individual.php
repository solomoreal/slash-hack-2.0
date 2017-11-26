<?php 
	include_once('model.php');
	class Individual extends Model{

        protected $individual_id;
		public $first_name;
		public $last_name;
		// public $middle_name;
		// public $sex;
		// public $dob;
		// public $phone;
		public $email;
		public $location;
		public $interest;
		// public $status;
		public $password;
		// public $date;
		

		public $passport;
		public $error = array();

		public static $class_name = 'Individual';
		public static $table_name = 'individual';
		public static $primary_key = 'individual_id';
		public static $table_fields = array('individual_id','first_name','last_name','email','location','interest','password');
		function __construct() 
		{
			parent::__construct();
		}
		
		/**public static function findBySql($sql){
		$obj = new static();
		$objects = $obj->connection->query($sql)->fetchALL(PDO::FETCH_CLASS,static::$class_name);
		return ($objects) ? $objects : false;
	}*/

		public static function authenticate($password, $email){
			$password = md5($password);
			$sql = "SELECT *FROM ".static::$table_name." WHERE email = '$email' AND password = '$password' LIMIT 1";
			$partner = static::findBySql($sql);
			//echo($sql);
			return ($partner) ? array_shift($partner) : false;
		}
		
		public function insertPartner(){
			$this->password = md5($this->password);
			return ($this->create())? true:false;
		}

		public static function findByEmail(){
		$sql = "SELECT * FROM " .self::$table_name. " WHERE  .email = {$this->email}";
		return static::findBySql($sql);  
	}
			
		
	}
?>