<?php 

class Database 
{
    private $driver;
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $conn;

    function __construct()
    {
        $this->driver = "mysql";
        $this->host = "localhost";
        $this->dbname = "crud_php";
        $this->username = "root";
        $this->password = "";
    }

    function getconexao()
    {
        try 
        {
            $this->conn = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbname", 
                $this->username,
                $this->password   
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $this->conn;
        } 
        
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    } 
}

?>