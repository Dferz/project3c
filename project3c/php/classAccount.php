<?php
	class Account{
		private $db;
	 
	    function __construct($DB_con){
	    	$this->db = $DB_con;
	    }
	 
	    public function register($user, $pass){
	    	try{
	    		$user = addslashes($user);
	    		$pass = addslashes($pass);
	    		$pass = hash("sha256", $pass);
	    		$stmt = $this->db->prepare("INSERT INTO account VALUES(:user, :pass)");
	            $stmt->bindparam(":user", $user);
	           	$stmt->bindparam(":pass", $pass);            
	           	$stmt->execute(); 
	   
	           	return $stmt; 
	      	}
	      	catch(PDOException $e){
	        	echo $e->getMessage();
	    	}    
	    }
	 
	    public function login($user, $pass){
			try{
				$user = addslashes($user);
	    		$pass = addslashes($pass);
	    		$pass = hash("sha256", $pass);
				$stmt = $this->db->prepare("SELECT * FROM account WHERE username=:user AND password=:pass");
			  	$stmt->execute(array(':user'=>$user, ':pass'=>$pass));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if($stmt->rowCount() > 0){
				    $_SESSION['admin_session'] = $userRow['username'];
				    $_SESSION['LAST_ACTIVITY'] = time();
				    return true; 
				}else{
					return false;
				}
			}
			catch(PDOException $e){
			   echo $e->getMessage();
			}
	   }
	 
	   public function is_loggedin()
	   {
	    	if(isset($_SESSION['admin_session'])){
	      		return true;
	      	}else{
	      		return false;
	      	}
	   }
	   public function still_loggedin(){
	   		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
			    session_unset();
			}
			$_SESSION['LAST_ACTIVITY'] = time();
	   }
	 
	   public function redirect($url)
	   {
	       	header("Location: $url");
	   }
	 
	   public function logout()
	   {
	   		unset($_SESSION['admin_session']);
	        session_destroy(); 
	        return true;
	   }

	}

?>