<?php

namespace Orecipes\Application\EditRecipe;

class EditRecipeRequest
{
    private $id;
    private $judul;
    private $isi;

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

    public function getJudul()
    {
        return $this->judul;
    }

    public function getIsi()
    {
        return $this->isi;
    }
}