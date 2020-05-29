<?php

namespace Orecipes\Application\AddRecipe;

class AddRecipeRequest
{
    private $judul;
    private $isi;
    private $id_user;

    public function __construct($judul, $isi, $id_user)
    {
        $this->judul = $judul;
        $this->isi = $isi;
        $this->id_user=$id_user;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getIsi()
    {
        return $this->isi;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

}