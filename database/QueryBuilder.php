<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:20 PM
 */
class QueryBuilder
{
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function select($table,$fields=array("*"),$condition=array("1"=>"1"),$operator="AND",$class="StdClass",$mode=PDO::FETCH_CLASS)
    {
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "$k = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'select %s from %s where %s',
            implode(', ',$fields),
            $table,
            $conditionKV
        );
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($mode,$class);
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function insert($table,$parameters)
    {
        $sql=sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ',array_keys($parameters)),
            ':'.implode(', :',array_keys($parameters))
        );
        try{
            $statement=$this->pdo->prepare($sql);
            return $statement->execute($parameters);
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function update($table,$fields,$condition,$operator)
    {
        $fieldsKV=implode(',',$this->array_map_assoc(function($k,$v){return "$k =".'"'.$v.'"';},$fields));
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "$k = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'update %s set %s where %s',
            $table,
            $fieldsKV,
            $conditionKV
        );
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function delete($table,$condition,$operator)
    {
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "$k = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'delete from %s where %s',
            $table,
            $conditionKV
        );
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    protected function array_map_assoc( $callback , $array ){
        $r = array();
        foreach ($array as $key=>$value)
            $r[$key] = $callback($key,$value);
        return $r;
    }
}