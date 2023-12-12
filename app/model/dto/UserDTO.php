<?php
class UserDTO implements DTO{
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

    public function toArray() : array{
        return [
            '_id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'passwordHash' => $this->passwordHash
        ];
    }

    public static function parseArray(array $data) : UserDTO{
        return new self(
            $data['id'],
            $data['username'],
            $data['email'],
            $data['passwordHash'] # Actually I am (personal joke, go 1 commit back to understand... if you can)
        );
    }
}
?>