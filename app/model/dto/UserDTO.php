<?php
class UserDTO implements DTO{
    private $id;
    private $username;
    private $email;
    private $passwordHash;

    public function __construct( $id, string $username, string $email, string $passwordHash){
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

    public static function parseArray(array $data) : array{
        $index = 0;
        $dtoArray = [];

        foreach($data as $row){
            $dtoArray[$index++] = new self(
                $row->_id,
                $row->username,
                $row->email,
                $row->passwordHash # Actually I am (personal joke, go 1 commit back to understand... if you can)
            );
        }

        return $dtoArray;
    }
}
?>