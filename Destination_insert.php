<?php
require_once('db.php');






class getSetData{
    //$desid = $_POST['des_id'];
    private $des_name;
    private $des_location;
    private $des_description; 
    private $des_price;

    private $des_image;

    public function __construct($des_name, $des_location, $des_description, $des_price,$des_image){
        $this->des_name = $des_name;
        $this->des_location = $des_location;
        $this->des_description = $des_description;
        $this->des_price = $des_price;
        $this->des_image = $des_image;
    }
    public function insertData(){
        try {
            $db = new dbConnection();
            $db->dbconnt();

            $sql_insert = "INSERT INTO `destinations`(`des_id`, `des_name`, `des_location`, `des_description`, `des_price`, `des_image`) VALUES (NuLL,?,?,?,?,?)";

            $stemt= $db->preQuery($sql_insert );
            $stemt->bindValue(2,$this->des_name); 
            $stemt->bindValue(3,$this->des_location); 
            $stemt->bindValue(4,$this->des_description); 
            $stemt->bindValue(5,$this->des_price); 
            $stemt->bindValue(6,$this->des_image); 

            $stemt->execute();

            return ($stemt->rowCount()>0);



        } catch (PDOException $th) {
            die("coudnot connect to database".$th->getMessage());
        }
    }

}
/*include('DbConnector.php');

*/
?>