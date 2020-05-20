<?php

namespace Idy\Idea\Application\DeletePost;

class DeletePostRequest
{
    public $id;

    public function __construct($postId)
    {
        $this->id = $postId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}