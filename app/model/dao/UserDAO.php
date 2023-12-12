<?php

class UserDAO extends DAO {
    public function __construct() {
        $userCollection = "users";
        parent::__construct($userCollection);
    }
}