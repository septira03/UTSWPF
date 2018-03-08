<?php 
class login{
		protected $user ;
		protected $pass ;
		
		public function __construct($user,$pass)
        {
			$this->username = $user;
			$this->pass = $pass;
		}
		
		public function adminguru(){
            if($this->username == "admin" && $this->pass  == admin)
			{
				header("location:home.php");
			}
			else if($this->username == "guru" && $this->pass  == guru)
			{
				header("location:home.php");
			}
			else{
				header("location:loginadmin.php");
			}
		}
	}	
?>