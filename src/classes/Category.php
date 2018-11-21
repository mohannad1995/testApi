<?php
require_once 'DBConnection.php';

class Category extends DBConnection
{

    public function view_cat()
    {
        $conn = $this->get_connect();
        $sql = "SELECT * FROM categoeies";
        $result = $conn->query($sql);
        return  mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
   


    

        public function insert_cat($lable){
            $conn =$this->get_connect();
            $sql = "INSERT INTO categoeies (id, lable) VALUES ('$lable')";
            $result = $conn->query($sql);
    if ($result) {
        return['success','insert successfully'] ;
    } else {
        return['error','insert error'] ;
    }
        }



        public function edit_cat($lable,$id)
        {
          $conn = $this->get_connect();
          $sql = "UPDATE categoeies SET lable= WHERE id=";
          $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    }

    

    public function delete_cat($id){
		$conn =$this->get_connect();
		$sql = "DELETE from categoeies WHERE id =";
        $result = $conn->query($sql);
if ($result) {
   return [ 'success','delete success '];
} else {
    return [ 'error','delete error '];
}
	}


   
}

