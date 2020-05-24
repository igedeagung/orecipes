<?php

namespace Orecipes\Domain\Model;

class Users
{
    private $id;

    private $nama;

    private $email;

    private $password;

    public function __construct($nama, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;

    }

    public function id() : string
    {
        return $this->id;
    }

    public function nama() : string
    {
        return $this->nama;
    }

    public function email() : string
    {
        return $this->email;
    }

    public function password() : string
    {
        return $this->password;
    }

    public static function makeUser($nama, $email, $password): Users
    {
        return new Users($nama, $email, $password);
    }
}