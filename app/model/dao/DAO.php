<?php
class DAO{
    protected $manager;
    protected $collection;

    public function __construct(string $collection){
        $this->collection = $collection;
        $this->manager = DBConnect::getInstance()->getManager();
    }

    public function insertOne(DTO $dto){
        try{
            $bulkWrite = new MongoDB\Driver\BulkWrite;
            $bulkWrite->insertOne($dto->getData);
            $this->manager->executeBulkWrite($this->collection, $bulkWrite);
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    public function findAll() : array | null{
        $query = new MongoDB\Driver\Query([]);
        $rows = $this->manager->executeQuery($this->collection, $query)<;
        
        return $rows;
    }

    public function find($id){

    }

    public function update($id, $dto){

    }

    public function delete($id){

    }
}