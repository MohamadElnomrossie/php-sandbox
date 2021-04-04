<?php
include_once('database.php');
include_once('operations.php');
class User extends database implements operation
{
    private $id;
    private $name;
    private $password;
    private $email;
    private $phone;
    private $photo;

    public function getID()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id=$id;
    }
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
    }
    function insertData()
    {
    }
    function deleteData()
    {
    }
    function selectAllData()
    {
    }
}
