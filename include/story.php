<?php
include_once 'Model.php';

/**
* 
*/
class Story extends Model
{
	protected $story_id;
	public $first_name;
	public $last_name;
	public $email;
	public $phone;
	public $story;
	public $date;
	public $passport;


	public static $class_name = 'Story';
	public static $table_name  = 'share_story';
	public static $primary_key = 'story_id'; 
	public static $table_fields = array ('story_id','first_name','last_name','email','phone','story','date','passport');






	public function __construct()
	{
		# code...
		parent::__construct();

	}

	public function getStoryid(){
		return $this->story_id;
	}

	 public function setStoryid(){

		if($laststory = static::last()){
	 		$lastId = explode ('/',$laststory->story_id);
	 		$lastId[1]++;
		$this->story_id = 'story/00'.$lastId[1];
	 	}else{
			$this->story_id = 'story/001'; 
		}

	}

		public function TellStory(){

	 		// $this->setStoryid();	 		
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
	 			if (!isset($this->story_id)) 
	 				$this->setStoryid();

	 			$this->temp_path = $file['tmp_name'];
	 			$this->passport = str_replace("/", "_", $this->story_id).".".basename($file["type"]);
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
	 		$target_path = "image/story/".$this->passport;
	 		if(move_uploaded_file($this->temp_path, $target_path)){
	 			if(static::find($this->story_id)){
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