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
    public function selectAll($table,$class="StdClass",$mode=PDO::FETCH_CLASS)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll($mode,$class);
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
    public function selectOrderLimitOffset($table,$fields=array("*"),$condition=array("1"=>"1"),$operator="AND",$class="StdClass",$order,$orderForm="DESC",$limit='ALL',$offset='0',$mode=PDO::FETCH_CLASS)
    {
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "$k = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'select %s from %s where %s order by %s %s limit %s offset %s',
            implode(', ',$fields),
            $table,
            $conditionKV,
            $order,
            $orderForm,
            $limit,
            $offset
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
            '`'.implode('`,`',array_keys($parameters)).'`',
            ':'.implode(', :',array_keys($parameters))
        );
        try{
            $statement=$this->pdo->prepare($sql);
            return $statement->execute($parameters);
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function update($table,$fields,$condition,$operator="AND")
    {
        $fieldsKV=implode(',',$this->array_map_assoc(function($k,$v){return "`$k` =".'"'.$v.'"';},$fields));
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "`$k` = ".'"'.$v.'"';},$condition));
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
    public function delete($table,$condition,$operator="AND")
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
    public function toggle($table,$column,$condition,$operator="AND")
    {
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "`$k` = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'update `%s` set `%s` = ! `%s` where %s',
            $table, $column, $column,
            $conditionKV
        );
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function increment($table,$column,$condition,$operator="AND")
    {
        $conditionKV=implode($operator, $this->array_map_assoc(function($k,$v){return "`$k` = ".'"'.$v.'"';},$condition));
        $sql=sprintf(
            'update `%s` set `%s` = `%s` + 1 where %s',
            $table, $column, $column,
            $conditionKV
        );
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
        }catch(Exception $e){
            die("Whoops!,something went wrong ".$e->getMessage());
        }
    }
    public function rawSQL($sql,$class="StdClass")
    {
        try{
            $statement=$this->pdo->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS,$class);
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
