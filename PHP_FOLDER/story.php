<?php
include_once './include/Model.php';

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
	public $error = array ();


	public static $class_name = 'Story';
	public static $table_name  = 'share_story';
	public static $primary_key = 'story_id'; 
	public static $table_fields = array ('first_name','last_name','email','phone','story_id','story');






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
			$this->story_id = 'story/0001'; 
		}

	}

		public function TellStory(){

	 		$this->setStoryid();	 		
	 		return ($this->create())? true : false;
	 	}


	
}





?>