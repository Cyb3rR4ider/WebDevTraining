<?php
include "Database.php";
class Users{
    var $username;
    var $password;
    var $firstname;
    var $lastname;
    var $regno;
    var $usertype;
    
    function __construct() {
        $this->username='';
        $this->password='';
        $this->firstname='';
        $this->lastname='';
        $this->regno=0;
        $this->usertype='';     
    }

        function getDb() {
        $DB = new Database();
        $DB->getUsers($this);
    }
    
    
}