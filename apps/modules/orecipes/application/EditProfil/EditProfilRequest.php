<?php

namespace Orecipes\Application\EditProfil;

class EditProfilRequest
{
    private $id;
    private $nama;
    private $email;

    public function __construct($id, $nama, $email)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmail()
    {
        return $this->email;
    }
}