<?php
require_once 'DBConnection.php';




class post extends DBConnection {

    public function view_post()
    {
        $conn = $this->get_connect();
        $sql = "SELECT * FROM post";
        $result = $conn->query($sql);
        return  mysqli_fetch_all($result,MYSQLI_ASSOC);
    } 




    public function inser_data()
    {
		$conn =$this->get_connect();
		$sql = "INSERT INTO post (id, title) VALUES ('1', 'programmer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}






    public function edit_post()
    {
      $conn = $this->get_connect();
      $sql = "UPDATE post SET title='Doe' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}






	public function delet_data(){
		$conn =$this->get_connect();
		$sql = "DELETE from post where id =1";

if ($conn->query($sql) === TRUE) {
    echo " record delete successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}

}




