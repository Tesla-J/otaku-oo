<?php
class UserDTO{
    private $id;
    private $username;
    private $email;
    private $passwordHash;

    public function __construct(string $id, string $username, string $email, string $passwordHash){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    public function getId() : string{
        return $this->id;
    }

    public function getUsername() : string{
        return $this->username;
    }

    public function getEmail() : string{
        return $this->email;
    }

    public function getPasswordHash(){
        return $this->passwordHash;
    }
}
?>