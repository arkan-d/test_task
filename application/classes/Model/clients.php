<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Clients extends Model
{
    /*table name*/
    private $table;
    
    /* postreSQL don't accept stored procedure, but same result may be using functions*/
    private $procedure;
    
    /* created view in database */
    private $view;
    
        private $id;
        private $number;
        private $name;
        private $last_name;
        private $email;
        private $adress;
        private $city;
        private $country;
    
    
    public function get_all_clients() {
        $view = 'list';
        $sql = "SELECT * FROM $view";
        $query = DB::query(Database::SELECT, $sql, FALSE);
         return $clients = $query->execute()->as_array();
    }
    
    /**
     *@accept array of pram
     *
     *@param int client number
     *@param varchar name
     *@param varchar last name
     *@param varchar email
     *@param varchar adress
     *@param varchar city
     *@param varchar country
     */
    public function add_client($array){
        //$query = "call add_client(475,'name','last name','emil','adress','city','country')";
        //DB::query(Database::SELECT, $query)->execute();
        $procedure = 'add_client';
        $number = $array['number'];
        $name = $array['name'];
        $last_name = $array['last_name'];
        $email = $array['email'];
        $adress = $array['adress'];
        $city = $array['city'];
        $country = $array['country'];
        
       
        $conn = Database::instance();       
        $queryStr = "select * from add_client($number,'$name','$last_name','$email','$adress','$city','$country')";
        $query = DB::query(Database::SELECT, $queryStr);
        return  $query->execute($conn);
       
        
    }
    
    /**
     *@param int id
     *@param int client number
     *@param varchar name
     *@param varchar last name
     *@param varchar email
     *@param varchar adress
     *@param varchar city
     *@param varchar country
     */
    public function edit_client($array){                
        
        $id = $array['id'];
        $number = $array['number'];
        $name = $array['name'];
        $last_name = $array['last_name'];
        $email = $array['email'];
        $adress = $array['adress'];
        $city = $array['city'];
        $country = $array['country'];
        
        $conn = Database::instance();       
        $queryStr = "select * from update_client($id,$number,'$name','$last_name','$email','$adress','$city','$country')";
        $query = DB::query(Database::SELECT, $queryStr);
        return  $query->execute($conn);
        
    }
    /**
     *@param int client id
     */
    public function one_client($id=''){
        $conn = Database::instance();       
        $queryStr = "select * from get_client($id)";
        $query = DB::query(Database::SELECT, $queryStr);
        return  $query->execute($conn)->as_array();
    }
    /**
     *@param int client id
     */
    public function del_client($id){
        
        
        $conn = Database::instance();       
        $queryStr = "select * from del_client($id)";
        $query = DB::query(Database::SELECT, $queryStr);
        return  $query->execute($conn);
        
    }
    
    
    public static function unique_number($number)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(number)'), 'total'))
            ->from('list')
            ->where('number', '=', $number)
            ->execute()
            ->get('total');
    }
    
    
}