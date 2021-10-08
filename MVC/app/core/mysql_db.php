<?php
class MySQLDB
{
    public $con;
    protected $server_name = "localhost";
    protected $user_name = "root";
    protected $db_name = "mvc";
    protected $password = "4666622073637";

    public function __construct()
    {
        $this->con = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->user_name, $this->password);
    }
}
// $query = $this->con->prepare("SELECT COUNT(id) as numofuser FROM `users` WHERE user_name!=:name");
// $query->setFetchMode(PDO::FETCH_ASSOC);
// $query->bindParam(':name', $name);
// $name=value;
// $query->excute();
