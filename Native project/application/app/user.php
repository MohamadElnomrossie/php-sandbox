<?php
include_once('database.php');
include_once('operations.php');
class User extends database implements operation
{
    private $name;
    private $password;
    private $email;
    private $phone;
    private $photo;
    private $code;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo=$photo;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone=$phone;
    }
    function updateData()
    { 
        $query='update `users` `name`="'.$this->name.'", `phone`='.$this->phone.', photo="'.$this->photo.'"
        ,`password`="'.$this->password.'" where `email`="'.$this->email.'"';
        $this->runDML($query);
    }
    function insertData()
    {
        $this->code=rand(10000,99999);
        $query='insert into  `users`(`name`,`password`,`email`,`code`) 
        values
        ("'.$this->name.'","'.$this->password.'","'.$this->email.'",'.$this->code.')';
        $this->runDML($query);
    }
    function deleteData()
    {

    }
    function selectAllData()
    {
        $query='select * from `users` where `email`="'.$this->email.'"';
       $rs= $this->runDQL($query);
        print_r($rs);
    }
    function insert(){
        
    }
}

?>
