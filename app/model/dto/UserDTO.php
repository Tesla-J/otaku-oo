<?php
class UserDTO{
    private $id;
    private $username;
    private $email;

    public __construct(string $id, string $username, string $email){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
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
}
?>