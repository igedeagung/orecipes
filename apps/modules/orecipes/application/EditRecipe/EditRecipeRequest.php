<?php

namespace Orecipes\Application\EditRecipe;

class EditRecipeRequest
{
    public $id;
    public $judul;
    public $isi;

    public function __construct($recipeId, $judul, $isi)
    {
        $this->id = $recipeId;
        $this->judul = $judul;
        $this->isi = $isi;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getIsi()
    {
        return $this->isi;
    }

    public function setIsi($isi)
    {
        $this->isi = $isi;
    }
}