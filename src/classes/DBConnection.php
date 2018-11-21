<?php

class DBConnection{
       
  
    public function get_connect()
    {
        // Create connection
        $conn = new mysqli('localhost', 'root', '', 'waves');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        return $conn;
    }
}