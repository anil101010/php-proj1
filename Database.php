<?php

class Database{
    public $connection;
public function __construct(){
    $config= [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4'
    ];

    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};{$config['charset']}";

   $this->connection=new PDO($dsn,'root','root',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
   ]);
}

    public function query($query){
        
        
        $statement=$this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

} 