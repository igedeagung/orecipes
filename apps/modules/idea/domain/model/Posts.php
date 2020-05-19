<?php

namespace Idy\Idea\Domain\Model;

class Posts
{
    private $id;
    private $id_user;
    private $judul;
    private $isi;

    public function __construct($id_user, $judul, $isi)
    {
        $this->id_user = $id_user;
        $this->judul = $judul;
        $this->isi = $isi;

    }

    public function id() : string
    {
        return $this->id;
    }

    public function id_user() : int
    {
        return $this->id_user;
    }

    public function judul() : string
    {
        return $this->judul;
    }

    public function isi() : string
    {
        return $this->isi;
    }

    public static function makePost($id_user, $judul, $isi): Posts
    {
        return new Posts($id_user, $judul, $isi);
    }

}