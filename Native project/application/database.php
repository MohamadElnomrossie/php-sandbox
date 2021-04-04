<?php
class database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'nti';
    private $con;
    function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->con->connect_error) {
            die("Connection Failed:$this->con->connect_error");
        } else {
            echo ("Connected");
        }
    }
    public function runDML($query)
    {
        $result=$this->con->query($query);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function runDQL($query)
    {
        $result=$this->con->query($query);
        if($result->num_rows>0){
            return $result;
        }
        else{
            return [];
        }
    }
}
