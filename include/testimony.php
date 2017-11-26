<?php 
	include_once('model.php');
	class Testimony extends Model{

        protected $testimony_id;
		public $first_name;
		public $last_name;
		public $phone;
		public $email;
		public $testimony;
		public $date;
		

		// public $passport;
		// public $error = array();

		public static $class_name = 'Testimony';
		public static $table_name = 'share_testimony';
		public static $primary_key = 'testimony_id';
		public static $table_fields = array('testimony_id','first_name','last_name','phone','email','testimony','date');


		function __construct() 
		{
			parent::__construct();
		}
		
		/**public static function findBySql($sql){
		$obj = new static();
		$objects = $obj->connection->query($sql)->fetchALL(PDO::FETCH_CLASS,static::$class_name);
		return ($objects) ? $objects : false;
	}*/

		// public static function authenticate($password, $email){
		// 	$password = md5($password);
		// 	$sql = "SELECT *FROM ".static::$table_name." WHERE email = '$email' AND password = '$password' LIMIT 1";
		// 	$partner = static::findBySql($sql);
		// 	//echo($sql);
		// 	return ($partner) ? array_shift($partner) : false;
		// }
		
		public function insertTestimony(){
			$this->password = md5($this->password);
			return ($this->create())? true:false;
		}

	// 	public static function findByEmail(){
	// 	$sql = "SELECT * FROM " .self::$table_name. " WHERE  .email = {$this->email}";
	// 	return static::findBySql($sql);  
	// }
			
		
	}
?>