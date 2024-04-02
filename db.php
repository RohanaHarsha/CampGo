<?php 
//this is database 
class dbConnection{
   private $host="localhost";
   private $username="root";
   private $dbpw="";
   private $db_name="test";
   private $con;
    
    
    public function dbconnt(){
        $dsn = "mysql:host=$this->host;dbname=$this->db_name";
        try {
            
            $this->con = new PDO($dsn, $this->username, $this->dbpw);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->con;
        } catch (PDOException $th) {
            die("CANNOT CONNTEC".$th->getMessage());
        }
    }

    public function preQuery($query){
        return $this->con->prepare($query);
    }

}

?>