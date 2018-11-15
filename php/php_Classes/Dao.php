<?php
	class Dao {
		private $host = "us-cdbr-iron-east-01.cleardb.net";
		private $db = "heroku_8d53fe00435ac54";
		private $user = "bf8c0a51dea646";
		private $pass = "0ae6984e";
		
		public function getConnection(){
		$conn=new PDO("mysql:host={$this->host};dbname={$this->db}",$this->user,$this->pass);
		return $conn;
	}
	
	public function setAdmin($id,$username,$password,$isadmin){
		$conn = $this->getConnection();
		$saveQuery= "INSERT INTO admin
			(id,username,passphrase,isadmin)
			VALUES
			(:id,:username,:passphrase,:isadmin)";
		$query=$conn->prepare($saveQuery);
		$query->bindParam(":id",$id);
		$query->bindParam(":username",$username);
		$query->bindParam(":passphrase",$password);
		$query->bindParam(":isadmin",$isadmin);
		$query->execute();				
	}



	public function boys_Stats($id,$dates,$our_name,$our_score,$their_name,$their_score,$convmade,$convatt,$penalties){
		 $conn = $this->getConnection();
                $saveQuery="INSERT INTO heroku_8d53fe00435ac54.boys_scores
                        (id,dates,Our_name,Our_Score,Their_name,Their_Score,Covmade,Convatt,Penalties)
                        VALUES
                        (:id,:dates,:our_name,:our_score,:their_name,:their_score,:convmade,:convatt,:penalties)";
                $query=$conn->prepare($saveQuery);
                $query->bindParam(":id",$id);
				$query->bindParam(":our_score",$our_score);
                $query->bindParam(":their_score",$their_score);
                $query->bindParam(":penalties",$penalties);
				$query->bindParam(":convmade",$convmade);
				$query->bindParam(":convatt",$convatt);
				$query->bindParam(":our_name",$our_name);
				$query->bindParam(":their_name",$their_name);
				$query->bindParam(":dates",$dates);
				$query->execute();
	}
	public function girls_Stats($id,$dates,$our_name,$our_score,$their_name,$their_score,$convmade,$convatt,$penalties){

                 $conn = $this->getConnection();
                $saveQuery="INSERT INTO heroku_8d53fe00435ac54.girls_scores
                        (id,dates,Our_name,Our_Score,Their_name,Their_Score,Covmade,Convatt,Penalties)
                        VALUES
                        (:id,:dates,:our_name,:our_score,:their_name,:their_score,:convmade,:convatt,:penalties)";
                $query=$conn->prepare($saveQuery);
                $query->bindParam(":id",$id);
				$query->bindParam(":our_score",$our_score);
                $query->bindParam(":their_score",$their_score);
                $query->bindParam(":penalties",$penalties);
		$query->bindParam(":convmade",$convmade);
		$query->bindParam(":convatt",$convatt);
		$query->bindParam(":our_name",$our_name);
		$query->bindParam(":their_name",$their_name);
		$query->bindParam(":dates",$dates);
		$query->execute();
	}
		
	public function jv_Boys_Stats($id,$dates,$our_name,$our_score,$their_name,$their_score,$convmade,$convatt,$penalties){

                 $conn = $this->getConnection();
                $saveQuery="INSERT INTO heroku_8d53fe00435ac54.jv_boys_scores
                        (id,dates,Our_name,Our_Score,Their_name,Their_Score,Covmade,Convatt,Penalties)
                        VALUES
                        (:id,:dates,:our_name,:our_score,:their_name,:their_score,:convmade,:convatt,:penalties)";
                $query=$conn->prepare($saveQuery);
                $query->bindParam(":id",$id);
				$query->bindParam(":our_score",$our_score);
                $query->bindParam(":their_score",$their_score);
                $query->bindParam(":penalties",$penalties);
		$query->bindParam(":convmade",$convmade);
		$query->bindParam(":convatt",$convatt);
		$query->bindParam(":our_name",$our_name);
		$query->bindParam(":their_name",$their_name);
		$query->bindParam(":dates",$dates);
		$query->execute();
	}


	public function calendar($dates,$event){
                $conn = $this->getConnection();
                $saveQuery= "INSERT INTO schedule
                        (dates,event)
                        VALUES
                        (:dates,:event)";
                $query=$conn->prepare($saveQuery);
		$query->bindParam(":dates",$dates);                
		$query->bindParam(":event",$event);
                $query->execute();
	 }

	 public function new_user($email,$password){
                $conn = $this->getConnection();
                $saveQuery= "INSERT INTO users
                        (email,password)
                        VALUES
                        (:email,:password)";
                $query=$conn->prepare($saveQuery);
		$query->bindParam(":email",$email);
		$query->bindParam(":password",$password);
                $query->execute();
         }
	
	public function get_admin($id){
		$conn=$this->getConnection();
		$getQuery = "SELECT id,username,passphrase,isadmin FROM admin WHERE id = :id";
		$query=$conn->prepare($getQuery);
		$query->bindParam(":id",$id);
		$query->execute();
		return reset($query->fetchAll());

	}
	public function get_admin_user($username){
		$conn=$this->getConnection();
		$getQuery = "SELECT id FROM admin WHERE username = :username";
		$query=$conn->prepare($getQuery);
		$query->bindParam(":username",$username);
		$query->execute();
		return reset($query->fetchAll());
	}	
	public function get_admin_pass($password){
	$conn=$this->getConnection();
				$getQuery="SELECT id FROM admin WHERE passphrase = :passphrase";
                $query=$conn->prepare($getQuery);
				$query->bindParam(":passphrase",$password);
                $query->execute();
                return reset($query->fetchAll());
	}
public function get_User_email($email){
		$conn=$this->getConnection();
		$getQuery = "SELECT id FROM  heroku_8d53fe00435ac54.users WHERE email = :email";
		$query=$conn->prepare($getQuery);
		$query->bindParam(":email",$email);
		$query->execute();
		return reset($query->fetchAll());
	}	
	public function get_User_pass($password){
	$conn=$this->getConnection();
				$getQuery="SELECT id FROM  heroku_8d53fe00435ac54.users WHERE password = :password";
                $query=$conn->prepare($getQuery);
				$query->bindParam(":password",$password);
                $query->execute();
                return reset($query->fetchAll());
	}
	public function get_Boys_Games(){
		$conn=$this->getConnection();
		return $conn->query("SELECT * FROM heroku_8d53fe00435ac54.boys_scores");
	}
	public function get_JVBoys_Games(){
		$conn=$this->getConnection();
		return $conn->query("SELECT * FROM heroku_8d53fe00435ac54.jv_boys_scores");
	}
	public function get_Girls_Games(){
		$conn=$this->getConnection();
		return $conn->query("SELECT * FROM heroku_8d53fe00435ac54.girls_scores");
	}
	}
?>


