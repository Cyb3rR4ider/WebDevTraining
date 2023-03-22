<?php
//PDO PHP CONNECTION TO DATABASE
//PDO PHP EXECUTE QUERY TO DATABASE


class Database {
    private $host;
    private $database;
    private $user;
    private $pass;
    private $pdo;
    private $opt;
    
       public function __construct() {
        $this->host = "127.0.0.1";
        $this->database = "HR";
        $this->user = "root";
        $this->pass = "";
    }

    public function connect() {
        $this->opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false];
        $conString = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8";
        $this->pdo = new PDO($conString, $this->user, $this->pass, $this->opt);
    }

    public function execute($sql, $array) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array);
        return $stmt;
    }
    
    
    ///////////////Queries////////////////////////

     public function getUsers(&$users) {
        $this->connect();
        $res = $this->execute("SELECT * FROM users "
                . "where RegNO= ?", [$users->regno]);
        $row = $res->fetch();
        $users->firstname= $row['FirstName'];
        $users->lastname= $row['LastName'];
        $users->usertype= $row['UserType'];
    }

    
    
    
}//end of Database class



?>