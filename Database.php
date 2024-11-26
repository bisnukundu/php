<?php 
Class Database {
    public $pdo;
    public $statement;
    function __construct($config, $username='root', $password = ''){
        try{        
        $dsn = "mysql:".http_build_query($config,'',';');
        $this->pdo = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
        
    }

    public function query($query,$params=[]){
        $this->statement= $this->pdo->prepare($query);
       $this->statement->execute($params);
        return $this;
    }
    
    public function find(){ 
        return $this->statement->fetch();
    }
    public function all(){ 
        return $this->statement->fetchAll();
    }


    
}


