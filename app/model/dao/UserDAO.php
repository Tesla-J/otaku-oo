<?php

class UserDAO extends DAO {
    public function __construct() {
        $usersCollection = "users";
        parent::__construct($usersCollection);
    }
}