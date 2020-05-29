<?php

namespace Orecipes\Application\Register;

class RegisterRequest
{
    private $nama;
    private $email;
    private $password;

    public function __construct($nama, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
}