<?php
    class DB{
        public $con;
        protected $serverName = 'localhost';
        protected $userName = 'root';
        protected $pass = '';
        protected $dbName = 'duan1';

        public function __construct()
        {
            $this->con = mysqli_connect($this->serverName, $this->userName, $this->pass, $this->dbName);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }

    }
?>