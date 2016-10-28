<?php
	class Database{
		public $host=DB_HOST;
		public $username=DB_USER;
		public $password=DB_PASS;
		public $db_name =DB_NAME;

		public $link;
		public $error;
		public function __construct(){
			$rtn = $this->connect();
			if(!$rtn){
				echo "<p style=\"padding:10px; background:red; color:white;font-size:17px\">Error: Can't Connect to database</p>";
			}
		}
		private function connect(){
		$this->link = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
			if(!$this->link){
				$this->error="connection failed ";
				return false;
			}else {
				return true;
			}
		}

		public function select($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}else {
				return false;
			}
		}

		/*Insert*/
		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($insert_row){
				header('Location:index.php?msg='.urlencode('Record added'));
			}else {
				die('Error: ('.$this->link->errno.') '.$this->link->error);
			}
		}
		/*Update*/
		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($update_row){
				header('Location:index.php?msg='.urlencode('Record Updated'));
				exit();
			}else {
				die('Error: ('.$this->link->errno.') '.$this->link->error);
			}
		}
		/*Delete*/
		public function delete($query){
			$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($delete_row){
				header('Location:index.php?msg='.urlencode('Record Deleted'));
				exit();
			}else {
				die('Error: ('.$this->link->errno.') '.$this->link->error);
			}
		}
	}
?>
