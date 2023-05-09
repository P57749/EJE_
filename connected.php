<?php
class connection{
    private $server="localhost"; // 127.0.0.1
    private $user="root";
    private $password="";
    private $connection;
    public function __construct(){
        try{
        $this->connection= new PDO("mysql:host=$this->server;dbname=user",$this->user,$this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            print "unsuccessful connection".$e;
            }
        }
        public function ejecutar($sql){
                $this->connection->exec($sql);
                return $this->connection->lastInsertId();
        }
}
?>