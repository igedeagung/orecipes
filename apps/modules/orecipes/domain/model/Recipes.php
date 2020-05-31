<?php

namespace Orecipes\Domain\Model;

class Recipes
{
    private $id;
    private $judul;
    private $isi;

    public function __construct($id, $judul, $isi)
    {
        $this->id = $id;
        $this->judul = $judul;
        $this->isi = $isi;

    }

    public function id() : int
    {
        return $this->id;
    }

    public function judul() : string
    {
        return $this->judul;
    }

    public function isi() : string
    {
        return $this->isi;
    }

    public static function makeRecipe($id, $judul, $isi): Recipes
    {
        return new Recipes($id, $judul, $isi);
    }

}