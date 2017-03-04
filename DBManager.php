<?php
class DBManager{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    private $dbh;
    private $error;
    
    private $stmt;
            function __construct(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo 'I am here';
        }

        
    }
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
    public function delete($table,$where) {
        $temp = [];
        foreach (array_keys($where) as $key) {
            $temp[] = $key.'= :'.$key;
        }
        $sWhere = implode(' AND ',$temp);
        unset($temp);
        
        $this->query('DELETE FROM '.$table.' WHERE '.$sWhere);
        foreach ($where as $key => $value) {
            $this->bind(':'.$key,$value);
        }
        $this->execute();
    }
    public function insert($table,$data) {
        $sFields = implode(', ',array_keys($data));
        $temp = [];
        foreach (array_keys($data) as $field) {
            $temp[] = ':'.$field;
        }
        $sValues = implode(', ',$temp);
        unset($temp);
        $this->query('INSERT INTO '.$table.' ('.$sFields.') VALUES ('.$sValues.')');
        foreach ($data as $key => $value) {
            $this->bind(':'.$key,$value);
        }
        $this->execute();
    }
    public function select($columns,$table,$where = array(),$limit='ALL',$offset=0){
        $required = implode(', ',$columns);
        if(count($where) > 0){
            $temp = [];
            foreach (array_keys($where) as $key) {
                $temp[] = $key.'= :'.$key;
            }
            $sWhere = implode(' AND ',$temp);
            unset($temp);
            $this->query('SELECT '.$required.' FROM '.$table.' WHERE '.$sWhere.' LIMIT '.$limit.' OFFSET '.$offset);
            foreach ($where as $key => $value) {
                $this->bind(':'.$key,$value);
            }
        }
        else{
            $this->query('SELECT '.$required.' FROM '.$table.' LIMIT '.$limit.' OFFSET '.$offset);
        }
        
        $output = $this->resultset();
        if(!isset($output[0])){
            $output = false;
        }
        return $output;
    }
    //update table set where
    public function update($table,$set,$where) {
        //set
        $temp = [];
        foreach (array_keys($set) as $key) {
            $temp[] = $key.'= :'.$key;
        }
        $sSet = implode(', ',$temp);
        unset($temp);
        //where
        $temp = [];
        foreach (array_keys($where) as $key) {
            $temp[] = $key.'= :'.$key;
        }
        $sWhere = implode(' AND ',$temp);
        unset($temp);
        $this->query('UPDATE '.$table.' SET '.$sSet.' WHERE '.$sWhere);
        $all = array_merge($set,$where);
        foreach ($all as $key => $value) {
            $this->bind(':'.$key,$value);
        }
        $this->execute();
    }
}
?>








