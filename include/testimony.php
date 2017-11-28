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
	public $passport;


	public static $class_name = 'Testimony';
	public static $table_name  = 'share_testimony';
	public static $primary_key = 'testimony_id'; 
	public static $table_fields = array ('testimony_id','phone','email','first_name','last_name','testimony','date','passport');






	function __construct()
	{
		# code...
		parent::__construct();

	}

	public function getTestimonyid(){
		return $this->testimony_id;
	}

	 public function setTestimonyid(){

	 	if($lasttestimony = static::last()){
			$lastId = explode ('/',$lasttestimony->testimony_id);
			$lastId[1]++;
			$this->testimony_id = 'Testimony/00'.$lastId[1];
		}else{
	 		$this->testimony_id = 'Testimony/001'; 
	 	}

	 }

		public function TellTestimony(){
			
	 		// $this->setTestimonyid();	 		
	 		return ($this->create())? true : false;
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
	 			if (!isset($this->testimony_id)) 
	 				$this->setTestimonyid();

	 			$this->temp_path = $file['tmp_name'];
	 			$this->passport = str_replace("/", "_", $this->testimony_id).".".basename($file["type"]);
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
	 		$target_path = "image/testimony/".$this->passport;
	 		if(move_uploaded_file($this->temp_path, $target_path)){
	 			if(static::find($this->testimony_id)){
	 				$this->update();
	 			}
	 			else{

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