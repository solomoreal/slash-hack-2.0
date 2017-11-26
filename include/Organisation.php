<?php
include_once 'Model.php';
/**
should org_id be primary_key
* Organisational class
*/
class Organisation extends Model{
	protected $org_id;
	public $website;
	public $address;
	public $password;
	public $rep;
	public $reason;
	public $email;
	public $status;
	public $headquarters;
	public $org_name;
	// public $rep_id



	public static $table_name = 'organisational_contributors';
	public static $primary_key = 'email';
	public static $class_name = 'Organisation';
	public static $table_fields = array ('org_id','website','address','password','rep','reason','email','headquarters');

	public function __construct(){
		parent::__construct();
	}
	


    public function setOrgId($org_id){
      return $this->org_id = $org_id;
    }
	public function getOrgId(){
		return $this->org_id;
	}
	
	// public function nextId(){
	// 	if ($lastOrganisation = static::last()) {
	// 	$lastId = $lastOrganisation->organisation_id;
	// 	}else{
	// 		$lastId = 0;
	// 	}
	// 	return ++$lastId;
	// 	}
	public static function authenticate($password, $org_id){
      $password = md5($password);
      $sql = "SELECT * FROM ".static::$table_name." WHERE org_id = '$org_id' AND password = '$password' LIMIT 1";
      $org = static::findBySql($sql);
      echo $sql;
      return ($org) ? array_shift($org) : false;
    }
    public function setNewOrgId(){
        if($lastOrg = static::last()){
          $lastId = explode ('/',$lastOrg->org_id );
          if (strlen(++$lastId[1])<3) {
            $this->org_id = 'org/'.str_repeat('0',3-strlen($lastId[1])).$lastId[1];
          }else{
            $this->org_id = 'org/'.$lastId[1];
          } 
        }else{
          $this->org_id = 'org/001';
        }      
      }

    public function insertOrg(){
	      $this->setNewOrgId();
	      $this->password = md5($this->password);
	      // echo $sql;
	      return ($this->create()) ? true : false;
	    }


		protected $upload_errors = array(
		 UPLOAD_ERR_OK => "No errors" ,
		 UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize" ,
		 UPLOAD_ERR_FORM_SIZE => "Larger than form max filesize" ,
		 UPLOAD_ERR_PARTIAL => "Partial upload" ,
		 UPLOAD_ERR_NO_FILE => "No file" ,
		 UPLOAD_ERR_NO_TMP_DIR => "No temporary directory" ,
		 UPLOAD_ERR_CANT_WRITE => "Cant write to disk" , 
		 UPLOAD_ERR_EXTENSION => "File upload stopped by extension"
	);


	public  function attach_file($file){
		if (!$file || empty($file) || !is_array($file)) {
		$this->errors[] = "No file was uploaded";
		return false;
		}elseif ($file['error'] != 0) {
			$this->errors[] = $this->upload_errors[$file['error']];
			return false;
			}else{
				if (!isset($this->org_id)) {
					$this->org_id = self::nextId();
					$this->temp_path = $file['tmp_name'];
					$this->image = str_replace("/", "_", $this->org_id).".".basename($file["type"]);
					$this->type = $file["type"];
					$this->size = $file["size"];
					return true;
				}
			}
		}
	public  function save_with_file(){//For Organisational logo, 
		if (!empty($this->errors)) {return false; }
		if (empty($this->image) || empty($this->temp_path)) {
			$this->errors[] = "The file location was not available";
			return false;
		}
		$target_path = "../images/organisations/".$this->image;
		//attempt to move the file
		if (move_uploaded_file($this->temp_path, $target_path)) {
		 	//save to db
		 	$this->create();
		 	unset($this->temp_path);
		 	return true;	
		 }else{
		 	$this->errors[] = "The file upload failed, possible due to incorrect permissions on the upload folder";
		 		return false;
		 }
	}

	public function nextId(){
		if ($lastOrg = static::last()) {
		$lastId = $lastOrg->org_id;
		}else{
			$lastId = 0;
		}
		return ++$lastId;
		}


	  public function delete(){
	      $sql = " DELETE FROM ".self::$table_name;
	      $sql.= " WHERE org_id = '{$this->org_id}'";
	      // echo $sql;
	      return static::findBySql($sql);
	      
    }
}
  ?>