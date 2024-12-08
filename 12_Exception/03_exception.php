<?php 
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
    function connect();
    function getName();
}

class MySQLServer implements NetworkStorage{
    function connect(){
        throw new DiskFullException;
    }

    function getName(){
        return "MySQL";
    }
}

class PostgreSQLServer implements NetworkStorage{
    function connect(){
        return $this;
    }

    function getName(){
        return "PostgreSQL";
    }
}

class MSSQLServer implements NetworkStorage{
    function connect(){
        throw new NetworkException;
    }

    function getName(){
        return "MSSQL";
    }
}

class ConnectionPool{
    private $connection;
    private $storage;
    function __construct(){
        $this->storage = array();
    }

    function addStorage($storage){
        array_push($this->storage, $storage);
    }

    function getConnection(){
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            }catch(ServerLoadException $e){
                echo $storage->getName()." is facing huge load\n";
            }catch(NetworkException $e){
                echo $storage->getName()." is facing network issue\n";
            }catch(DiskFullException $e){
                echo $storage->getName()." is facing disk full\n";
            }

            if($this->connection){
                break;
            }
        }

        if($this->connection){
            return $this;
        }
        return false;

    }
}

$mysql = new MySQLServer();
$postgresql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($postgresql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);





?>