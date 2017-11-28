 <?php
include_once 'Model.php';
include_once 'Organisation.php';
/**
* Individual class
*/
class Individual extends Model{
	protected $indiv_id;
	public $firstname;
	public $lastname;
	public $org_id;
	public $phone;
	public $email;
	public $address;
	public $password;
	public $status;
	public $company;
	public $username;
	public $city;
	public $country;
	public $about_me;



	public static $table_name = 'individual_contributors';
	public static $primary_key = 'email';
	public static $class_name = 'Individual';
	public static $table_fields = array ('indiv_id','org_name', 'firstname','lastname','org_id','phone','email','address','password','company','username','city','country','about_me');

	public function __construct(){
		parent::__construct();
	}
	

	public function getIndId(){
		return $this->indiv_id;
	}

	 public function setIndId($indiv_id){
      return $this->indiv_id = $indiv_id;
    }

	
	public static function authenticate($password, $email){
	      $password = md5($password);
	      $sql = "SELECT * FROM ".static::$table_name." WHERE email = '$email' AND password = '$password' LIMIT 1";
	      $indiv = static::findBySql($sql);
	      echo $sql;
	      return ($indiv) ? array_shift($indiv) : false;
	    }
	public function setNewIndivId(){
        if($lastIndiv = static::last()){
          $lastId = explode ('/',$lastIndiv->indiv_id );
          if (strlen(++$lastId[0])<3) {
            $this->indiv_id = 'indiv/'.str_repeat('0',3-strlen($lastId[1])).$lastId[1];
          }else{
            $this->indiv_id = 'indiv/'.$lastId[1];
          } 
        }else{
          $this->indiv_id = 'indiv/001';
        }      
      }

    public function insertIndiv(){
	      $this->setNewIndivId();
	      $this->password = md5($this->password);
	      // echo $sql;
	      return ($this->create()) ? true : false;
	    }

	public function nextId(){
		if ($lastIndiv = static::last()) {
		$lastId = $lastIndiv->indiv_id;
		}else{
			$lastId = 0;
		}
		return ++$lastId;
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

		//SUPERGLOBALS ARE NORMALLY ARRAYS

	public  function attach_file($file){
		if (!$file || empty($file) || !is_array($file)) {
		$this->errors[] = "No file was uploaded";
		return false;
		}elseif ($file['error'] != 0) {
			$this->errors[] = $this->upload_errors[$file['error']];
			return false;
			}else{
				if (!isset($this->indiv_id)) {
					$this->indiv_id = self::nextId();
					$this->temp_path = $file['tmp_name'];
					$this->image = str_replace("/", "_", $this->indiv_id).".".basename($file["type"]);
					$this->type = $file["type"];
					$this->size = $file["size"];
					return true;
				}
			}
		}
	public  function save_with_file(){
		//house cleaning
		if (!empty($this->errors)) {return false; }
		if (empty($this->image) || empty($this->temp_path)) {
			$this->errors[] = "The file location was not available";
			return false;
		}
		$target_path = "../images/individuals/".$this->image;
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


	  public function delete(){
	      $sql = " DELETE FROM ".self::$table_name;
	      $sql.= " WHERE email = '{$this->email}'";
	      // echo $sql;
	      return static::findBySql($sql);
	      
    }
}
  ?>