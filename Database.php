<?php

class Database
{
    var $server = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "crud";

    //connect to db
    public function connect()
    {
        $conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    //save record to db
    public function insertRecord($table, $name, $code, $address)
    {
        $conn = $this->connect();
        $statement = "INSERT INTO $table (name, code, address) VALUES ('" . $name . "','" . $code . "','" . $address . "')";
        if (mysqli_query($conn, $statement)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $statement . "<br>" . mysqli_error($conn);
        }
    }

    //get all data from db
    public function getAllRecords()
    {
        $conn = $this->connect();
        $statement = "SELECT * FROM companies";
        return mysqli_query($conn, $statement);
    }
}
