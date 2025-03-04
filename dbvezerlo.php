<?php
class DBController
{
    private $conn=null;
    private $host="localhost";
    private $user="root";
    private $password="";
    private $database="mobile";

    function __construct()
    {
        $this->connectDB();
    }


    function connectDB()
    {
        try
        {
            $this->conn = new PDO("mysql:host={$this->host};
            dbname={$this->database};charset=utf8",
            $this->user,$this->password);
            $this->conn->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $err)
        {
            die("CSatlakozási hiba: ".$err->getMessage());
        }
    }
    function executeSelectQuery($query,$params=[])
    {
        try
        {
            $stmt=$this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt-> fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $err)
        {
            die("LEkérdezés hibás ".$err->getMessage());
        }
    }
    function closeDB()
    {
        $this->conn=null;
    }
}