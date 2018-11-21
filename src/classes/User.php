<?php
require_once 'DBConnection.php';


class user extends DBConnection {

    public function view_user()
    {
        $conn = $this->get_connect();
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        return  mysqli_fetch_all($result,MYSQLI_ASSOC);
    } 



	public function inser_data(){
		$conn =$this->get_connect();
		$sql = "INSERT INTO users (id, username) VALUES ('1', 'programmer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}






    public function edit_user()
    {
      $conn = $this->get_connect();
      $sql = "UPDATE users SET username='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}





    public function delet_data()
    {
		$conn =$this->get_connect();
		$sql = "DELETE from usres where id =1";

if ($conn->query($sql) === TRUE) {
    echo " record delete successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}


}
    
