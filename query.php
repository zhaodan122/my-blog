<?php

Class Lists {
	private  $data = array();
	private	$servername = "";
	private	$username = "";
	private	$password = "";
	private	$dbname = "";
	
	public function data(){
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
		
		$sql = "SELECT a.name,
				   a.nrole,
				   a.location,
				   b.title,
				   b.nbody,
				   b.tags,
				   b.image_url,
				   b.created_at,
				   b.updated_at
			  FROM author_tb a,
				   post_tb b
			 WHERE a.post_id=b.post_id
			 ";
		if ($result = mysqli_query($conn, $sql)) {
			$res = mysqli_fetch_all($result, MYSQLI_NUM);
			return $res;
		} else {
			echo "Error creating table: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	
	public function get_info(){
		return $this->data;
	}

}

?>