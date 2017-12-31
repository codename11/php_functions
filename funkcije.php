<?php

class SimpleDB{
    private $conn;

    // hide all data inside class instance
    public function __construct($server_name, $user_name, $password, $db_name){
        $this->conn=new mysqli($server_name, $user_name, $password, $db_name);

        if($this->conn->connect_error){
            die("ERROR: " . $this->conn->connect_error);
        }
    }

    function __destruct() {
        $this->conn->close();
    }

    //Function that executes query.
    public function execute($sql_query){
        $result = $this->conn->query($sql_query);
        if ($result == TRUE){
            echo "Connection success";
        } else {
            echo "Connection fail: " . $conn->error;
        }

        return $result;
    }
	
	function multi_execute($sql_query){

		$result = $this->conn->multi_query($sql_query);
		if ($result === TRUE) {
			echo "New records created successfully";
		} 
		else {
			echo "Error: " . $sql_query . "</br>" . $conn->error;
		}
		
		return $result;

	}

}

class Validation{
	
	private $data;
	
	public function __construct($par){
        $this->data = $par;
    }

	public function getData() { //Getovanje vrednosti za naziv servera.
        return $this->data;
    }
	
    function __destruct() {
        $this->data;
    }
	
	function test_input($par) {
		$par = trim($par);
		$par = stripslashes($par);
		$par = htmlspecialchars($par);
		return $par;
	}
	
}
?>
