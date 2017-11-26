<?php
include_once 'MyPDO.php';
class Model extends MyPDO{

	protected static $class_name;
	protected static $primary_key;
	protected static $table_name;
	protected static $table_fields;

	public function __construct(){
		parent::__construct();
	}
	

	public static function findBySql($sql){
		$obj = new static();
		$objects = $obj->connection->query($sql)->fetchALL(PDO::FETCH_CLASS,static::$class_name);
		return ($objects) ? $objects : false;
	}

	public static function last(){
		$sql = "SELECT * FROM " .static::$table_name. " ORDER BY " .static::$primary_key." DESC LIMIT 1 ";
		$obj = new static();
		$objects = $obj->connection->query($sql)->fetchAll(PDO::FETCH_CLASS,static::$class_name);
			
		return ($objects) ? array_shift($objects) : false;

	}
	
	

	public static function all(){
			$sql ="SELECT * from ".static::$table_name;
			echo($sql);
			$obj = new static();
			$objects = $obj->connection->query($sql)->fetchALL(PDO::FETCH_CLASS,static::$class_name);
			return ($objects) ? $objects : false;
		}
	

	public static function find($id){
		$sql = "SELECT * FROM " .static::$table_name. " WHERE " .static::$primary_key." = '$id'";
		$obj = new static();
		$objects = $obj->connection->query($sql)->fetchAll(PDO::FETCH_CLASS,static::$class_name);
			
		return ($objects) ? array_shift($objects) : false;

	}

	public static function instantiate ($record){
		$obj = new static();
		foreach ($record as $key => $value) {
			if(in_array($key, static::$table_fields))
				$obj->$key=$value;
		}
		return $obj;
	}
	

	private function attributes(){
		$attributes = array();
		foreach (static::$table_fields as $field) {
			if ($this->$field != Null) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}
	
	public function create(){
		$obj_attributes_array = $this-> attributes();

		$obj_attributes_array_keys = array_keys($obj_attributes_array);

		$sql = "INSERT INTO ".static::$table_name;
		$sql .= " (" .join(',',$obj_attributes_array_keys).")";
		$sql .= "VALUES ('" .join("','",$obj_attributes_array)."')";
		echo $sql;
		return ($this->connection->query($sql)) ? true : false;
	}
	
	public  function update(){
		$sql = "UPDATE ".static::$table_name." SET ";
		$attributes = $this->attributes();

		$attribute_pairs = array();
		foreach ($attributes as $field => $value) {
			$attribute_pairs[] = "$field = '$value'";
		}
		$primary_key = static::$primary_key;
		$sql.= join (',', $attribute_pairs);
		$sql.= " WHERE $primary_key = '{$this->$primary_key}'";
		return $this->connection->query($sql);

	}
 	

		
}
?>