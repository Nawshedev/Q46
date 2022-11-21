<?php

class Database
{
    private $host;
    private $user;
    private $pass;
    private $dbName;
    private $connexion;
    private $request;

    public function __construct($host, $user, $dbName, $pass)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbName = $dbName;
    }

    public function connect()
    {
        $path = "mysql:host=$this->host;dbname=$this->dbName;charset=utf8";

        try
        {
            $this->connexion = new PDO($path, $this->user, $this->pass);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connexion;
        }
        catch (PDOException $e)
        {
            throw new PDOException($e->getMessage() , (int)$e->getCode());
        }
    }

    public function prepReq($query, $array = [])
    {
        $this->request = $this->connexion->prepare($query);
        $this->request->execute($array);
        return $this->request;
    }


    public function fetchData()
    {
        return $this->request->fetchAll();
    }



}