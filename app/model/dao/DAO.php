<?php
class DAO{
    protected $manager;
    private $collection;
    private $bulkWrite;


    # $collection : specifies the collection we'll work with
    public function __construct(string $collection){
        $this->collection = $collection;
        $this->manager = DBConnect::getInstance()->getManager();
        $this->bulkWrite = new MongoDB\Driver\BulkWrite;
    }

    public function insertOne(DTO $dto){
        try{
            $bulkWrite->insertOne($dto->toArray());
            $this->manager->executeBulkWrite($this->collection, $bulkWrite);
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    public function findAll($filter = []) : array | null{
        $query = new MongoDB\Driver\Query($filter);
        $rows = $this->manager->executeQuery($this->collection, $query)<;
        
        return $rows;
    }

    public function find($id) array | null{
        $filter = ['_id' => $id];

        return $this->findAll($filter);
    }

    public function update($id, $dto){

    }

    public function delete($id){

    }
}