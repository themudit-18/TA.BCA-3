<?php

    // Create Class For Connetion

    class DbConfig 
    {
        // Define Detail of Admin
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbName = "mca-3";
        public $con = "";

        function __construct()
        {
            try {
                $this->con = mysqli_connect($this->host,$this->username,$this->password,$this->dbName) or die("Something Went A Wrong, Message:".mysqli_connect_error());
            } catch (Exception $e) {
                echo "Exception Occur,Message: ". $e->message;
            }
        }
    }
?>