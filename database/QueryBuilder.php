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
    public function select($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $params)
    {
        $sql = sprintf(
            'INSERT INTO `%s` (%s) VALUES(%s)',
            $table,
            implode(', ',array_keys($params)),
            ':'.implode(', :',array_keys($params))
        );
        $statement = $this->pdo->prepare($sql);
        return $statement->execute($params);
    }
}