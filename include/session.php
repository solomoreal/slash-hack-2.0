<?php 
	class Session{
		public $user_id;
		private $logged_in;

		function __construct(){
			session_start();
			$this->check_login();
		}

		public function check_login(){
			if(isset($_SESSION['user_id'])){
				$this->user_id = $_SESSION['user_id'];
				$this->logged_in = true;
				}else {
					unset($this->user_id);
					$this->logged_in = false;
				}
			}	

			public function is_logged_in(){
				return $this->logged_in;
			}
			
			public function login($user){
				if ($user) {
					$this->user_id = $_SESSION['user_id'] = $user->getPartnerid();
					$this->logged_in = true;
				}
			}

			public function logout(){
				//$this->user_id = null;
				$this->logged_in = false;
				session_destroy();
			}
		}
	
	$session = new session();
?>