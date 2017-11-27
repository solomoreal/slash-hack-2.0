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
		public $passport;
		public $error = array();

		public static $class_name = 'Individual';
		public static $table_name = 'individual';
		public static $primary_key = 'individual_id';
		public static $table_fields = array('individual_id','first_name','last_name','email','location','interest','password','passport');
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
			
		

			public function getIndividialId(){
		return $this->individual_id;
	}

		public function setIndividualId(){

			if($lastindividual = static::last()){
		 		$lastId = explode ('/',$lastindividual->individual_id);
		 		$lastId[1]++;
			$this->individual_id = 'INDV/00'.$lastId[1];
		 	}else{
				$this->individual_id = 'INDV/001'; 
			}

		}
			
			protected $upload_errors = array (
	 		UPLOAD_ERR_OK         => "No errors.",
	 		UPLOAD_ERR_INI_SIZE   => "Larger than upload_max_filesize.",
	 		UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
	 		UPLOAD_ERR_PARTIAL    => "Partial upload",
	 		UPLOAD_ERR_NO_FILE    =>  "No file.",
	 		UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
	 		UPLOAD_ERR_CANT_WRITE => "Cant write to disk.",
	 		UPLOAD_ERR_EXTENSION  => "File upload stopped by extension." );

	 	

	 	public function  attach_file($file){
	 		//recieves $_file ('UPLOADED  FILE')
	 		//ERROR CHECKNG , SET OJESCT ATTRIBUTESss
	 		if(!$file || empty($file) || !is_array($file)){
	 			$this->errors[] = "No file was uploaded. ";
	 			return  false;
	 		}elseif($file['error'] != 0){
	 			$this->errors[] = $this->upload->errors[$file['error']];
	 			return  false;
	 		}else{
	 			if (!isset($this->indiviidual_id)) 
	 				$this->setIndividualId();

	 			$this->temp_path = $file['tmp_name'];
	 			$this->passport = str_replace("/", "_", $this->individual_id).".".basename($file["type"]);
	 			$this->type = $file['type'];
	 			$this->size = $file['size'];
	 			return true;
	 		}
	 	}

	 	public function save_with_file(){

	 		if(!empty($this->errors)){return false;}
	 		if(empty($this->passport) || empty($this->temp_path)){
	 			$this->errors[] = "The file location was not avaliable.";
	 			return false;
	 		}
	 		$target_path = "image/individual/".$this->passport;
	 		if(move_uploaded_file($this->temp_path, $target_path)){
	 			if(static::find($this->individual_id)){
	 				$this->update();
	 			}
	 			else{
	 				$this->password = md5($this->password);
	 				$this->create();
	 			}
	 			unset($this->temp_path);
	 			return true;
	 		}else {
	 			$this->errors[]= "The file uploade failed, possible due to incorrect permission on the upload folder";
	 			return false;
	 		}
	 	}
		
	}
?>