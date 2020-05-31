<?php

namespace Orecipes\Application\Register;

class RegisterRequest
{
    private $nama;
    private $email;
    private $password;
    private $kpassword;

    public function __construct($nama, $email, $password, $kpassword)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
        $this->kpassword = $kpassword;
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

    public function getKPassword()
    {
        return $this->kpassword;
    }
}