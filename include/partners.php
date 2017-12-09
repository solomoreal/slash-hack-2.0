<?php
	include_once ('raw_conn.php');

	 function authenticate($password, $email){
	 	 GLOBAL $db;
			$password = md5($password);
			$sql = "SELECT i.email,
                  i.password
             FROM individual i 
             JOIN organisation o ON o.organisation_id = i.organisation_id WHERE  o.email = '$email' AND o.password = '$password' ";
             echo($sql);
   $result = mysqli_query($db,$sql) or die(mysql_error());
   $partner = mysqli_fetch_array($result,MYSQLI_ASSOC); 
   	return ($partner) ? array_shift($partner) : false;
   	
}


 ?>