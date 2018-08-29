<?php

class Database{
    protected $connection;

    function __construct()
    {
        $credentials = ['name'=>'help_desk', 'user' => 'root', 'password' => 'onesama44'];
        $this->connection = $this->establishConnection($credentials['name'], $credentials['user'], $credentials['password']);
    }

    private function establishConnection($name, $user, $password){
        try{
            $connection = new PDO("mysql:dbname={$name};host=127.0.0.;charset=UTF8", $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e){
            var_dump($e->getMessage());
            return false;
        }
        return $connection;
    }

    protected function formatStatementExecutionResult($result, $data = 'No error message or data provided.'){
        if ($result)
            return ['executionResult'=> true, 'data' => $data];
        else
            return ['executionResult'=> false, 'data' =>  $this->connection->errorInfo()[2]];
    }

    function getAllDepartments(){
        try{
            $statement = $this->connection->prepare("SELECT *  FROM `departments`");

                return $this->formatStatementExecutionResult($statement->execute(), $statement->fetchAll(PDO::FETCH_ASSOC));
            }
            catch(Exception $e){
                return $this->formatStatementExecutionResult(false, $e->getMessage());
            }
        }
}