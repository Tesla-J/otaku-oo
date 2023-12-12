<?php
abstract class DAO{
    private $manager;
    private $collection;
    private $bulkWrite;


    # $collection : specifies the collection we'll work with
    public function __construct(string $collection){
        $this->collection = "otaku-king." . $collection;
        $this->manager = DBConnect::getInstance()->getManager();
        $this->bulkWrite = new MongoDB\Driver\BulkWrite;
    }

    public function insertOne(DTO $dto){
        try{
            $dataArray = $dto->toArray();
            array_shift($dataArray);
            $this->bulkWrite->insert($dataArray);
            $this->manager->executeBulkWrite($this->collection, $this->bulkWrite);
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    public function findAll($filter = []) : array | null{
        try{
            $query = new MongoDB\Driver\Query($filter);
            $rows = $this->manager->executeQuery($this->collection, $query);
            
            return $rows;
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    public function find($id) : array | null{
        $filter = ['_id' => $id];

        return $this->findAll($filter);
    }

    public function update($id, $dto){
        try{
            $this->bulkWrite->update(['_id' => $id], $dto->toArray());
            $this->manager->executeBulkWrite($this->collection, $this->bulkWrite);
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }

    public function delete($id){
        try{
            $this->bulkWrite->delete(['_id' => $id]);
            $this->manager->executeBulkWrite($this->collection, $this->managerbulkWrite);
        }
        catch(MongoDB\Driver\Exception\Exception $e){
            echo $e->getMessage();
        }
    }
}