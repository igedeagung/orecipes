<?php

namespace Idy\Idea\Application\AddPost;

class AddPostRequest
{
    public $judul;
    public $isi;
    public $id_user;

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

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

}