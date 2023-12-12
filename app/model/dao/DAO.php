<?php
class DAO{
    protected $manager;
    protected $collection;

    public function __construct(string $collection){
        $this->collection = $collection;
        $this->manager = DBConnect::getInstance()->getManager();
    }

    public function insertOne(DTO $dto){
    
    }

    public function findAll(){

    }

    public function find($id){

    }

    public function update($id, $dto){

    }

    public function delete($id){

    }
}